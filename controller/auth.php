<?php
switch(PATH){
    case "recover":
        $_SESSION['step'] = $_SESSION['step'] ?? 1;
        if($_SERVER['REQUEST_METHOD'] == "POST"):
            if(isset($_POST['email']) && $_SESSION['step'] == 1):
                $row = $db->execute("SELECT * FROM users WHERE email = '$email' OR username= '$email' ")->fetch_array(MYSQLI_ASSOC);
                if(!empty($row)){
                    $user_id = $row['user_id'];
                    $token = md5(uniqid());
                    $code = rand(100000, 999999);
                    if($db->execute("INSERT INTO token (user_id, token, code) VALUES ('$user_id','$token','$code')")){ 
                        $_SESSION['step'] = 2; 
                        $_SESSION['code_error_times'] = 0;
                        $_SESSION['user_id'] = $user_id;
                    }
                }else {
                    $error = "Username or email not exist";
                }
            endif;
            
            if(isset($_POST['code']) && $_SESSION['step'] == 2):
                if(strlen($code) == 6 && is_numeric($code)){
                    $row = $db->execute("SELECT * FROM token WHERE code = '$code' AND clicked = -1 AND DATE_ADD(datetime, INTERVAL validity MINUTE) >= CURRENT_TIMESTAMP")->fetch_array(MYSQLI_ASSOC);
                    if(!empty($row)){
                        if($db->execute("DELETE FROM token WHERE user_id = '{$_SESSION['user_id']}' ")){
                            $_SESSION['step'] = 3;
                        }
                    }else{
                        if(++$_SESSION['code_error_times'] >= 3) {
                            $db->execute("DELETE FROM token WHERE user_id = '{$_SESSION['user_id']}' ");
                            session_destroy();
                            blockThisIp();
                            redirect('signin');
                        }
                        $error = $_SESSION['code_error_times']."/3 : le Code n'est pas correct!";
                    }
                }
            endif;
            
            if(isset($_POST['token']) && $_SESSION['step'] = 2):
                if(!empty($token)){
                    $row = $db->execute("SELECT * FROM token WHERE token = '$token' AND clicked = -1 AND DATE_ADD(datetime, INTERVAL validity MINUTE) >= CURRENT_TIMESTAMP ")->fetch_array(MYSQLI_ASSOC);
                    if(!empty($row)){
                        if($db->execute("UPDATE token SET clicked = 1 WHERE token = '$token' AND user_id = '{$_SESSION['user_id']}' ")){
                            $_SESSION['step'] = 3;
                        }
                    }else{
                        $error = "Erreur au niveau du token!";
                    }
                }
            endif;

            if(isset($_POST['password']) && $_SESSION['step'] = 3):
                if(strlen($password) >= 8){
                    if($password == $r_password){
                        if(isPasswordStrong($password)){
                            if(isset($_SESSION['user_id'])){
                                $password = md5($password);
                                $row = $db->execute("UPDATE users SET password = '$password' WHERE user_id = '{$_SESSION['user_id']}'");
                                if($row){
                                    session_destroy();
                                    // $db->execute("DELETE FROM token where user_id = '{$_SESSION['user_id']}'");
                                    redirect('signin?password_changed');
                                    
                                }else $error = "Erreur de mis à jour!";

                            }else {$error = "You will be banned !"; blockThisIp();}

                        }else $error = "Le mot de passe est faible!";

                    }else $error = "Les deux mot de passes ne sont pas identiques!";
                    
                }else  $error = "Le mot de passe doit etre au moins 8 caracteres!";
                
            endif;
        endif;

        include "view/auth/recover.php";
    break;
    case "verify":
        if(isset($_GET['token'])):
            $sql = "SELECT * FROM token, users WHERE token = '{$_GET['token']}' AND clicked = -1 AND DATE_ADD(token.datetime, INTERVAL token.validity MINUTE) >= CURRENT_TIMESTAMP AND users.user_id = token.user_id AND users.active = -1";
            $data = $db->execute($sql)->fetch_array(MYSQLI_ASSOC) ?? "";
            if(!empty($data)){
                $_SESSION['user_id'] = $data["user_id"];
                $_SESSION['username'] = $data["username"];
                $_SESSION['fullname'] = $data["fullname"];
                $_SESSION['role'] = $data["role"];
                $db->execute("UPDATE users SET active = 1, connected = 1, last_connexion =  CURRENT_TIMESTAMP WHERE user_id = '{$data['user_id']}'");
                $db->execute("DELETE FROM token WHERE token = '{$_GET['token']}'");
                redirect('home');
            }else echo "TOKEN HAS BEEN EXPIRED!";
        endif;
    break;
    case "signin":
    case "login":
        if(isset($_COOKIE['session_token'])){
            $data = $db->selectUserDataByToken($_COOKIE['session_token']);
            if(!empty($data)){
                $_SESSION['fullname'] = $data["fullname"];
                $_SESSION['username'] = $data["username"];
                $_SESSION['user_id'] = $data["user_id"];
                $_SESSION['role'] = $data["role"];
                $db->execute("UPDATE users SET connected = 1, last_connexion =  CURRENT_TIMESTAMP WHERE user_id = '{$data['user_id']}'");
            }
            redirect('home');
            exit();
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'):
                if($db->isLoginCorrect($username, md5($password))){
                    if($db->isUserActive($username)){
                        $data = $db->selectUserData($username);
                        $_SESSION['fullname'] = $data["fullname"];
                        $_SESSION['username'] = $data["username"];
                        $_SESSION['role'] = $data["role"];
                        $_SESSION['user_id'] = $data["user_id"];
                        $db->execute("UPDATE users SET connected = 1, last_connexion =  CURRENT_TIMESTAMP WHERE user_id = '{$data['user_id']}'");
                        if(isset($rememberme)){
                            $session_token = md5(uniqid());
                            $db->execute("UPDATE users SET session_token = '$session_token'  WHERE user_id = '{$data["user_id"]}' ");
                            setcookie("session_token", $session_token, time()+(3600*24*365),'/');
                        } 
                        redirect('dashboard');
                    } else {
                        $data = $db->selectUserData($username);
                        $token = md5(uniqid());
                        $db->execute("INSERT INTO token (user_id, token) VALUES ('{$data['user_id']}', '$token')");
                        $link = URL."verify?token=$token";
                        $error = "confirmation <a href='$link' style='display:inline'>link</a> has been sent, please verify your email!";
                    }

                }else $error = "username or password are wrong!";
            
        endif;
        include "view/auth/signin.php";
    break;
    case "signup":
    case "register":
        if($_SERVER['REQUEST_METHOD'] == 'POST'):
            if($password == $r_password && isPasswordStrong($password)){
                if(!$db->isUserExist($username)){
                    if(!$db->isEmailExist($email)){
                        $password = md5($password);
                        $data = $db->execute("INSERT INTO users (username, fullname, password, email) VALUES ('$username','$fullname','$password','$email')");
                        $data = $db->selectUserData($username);     
                        $_SESSION['fullname'] = $data["fullname"];
                        $_SESSION['username'] = $data["username"];
                        $_SESSION['user_id'] = $data["user_id"];
                        $token = md5(uniqid());
                        $db->execute("INSERT INTO token (user_id, token) VALUES ('{$data['user_id']}', '$token')");
                        $link = URL."verify?token=$token";
                    } else $error = "The email is already exist!";
                }else $error = "The username is already exist!";
            } else $error = "The passwords must be the same and it's length >= 8 and contains at least one digit, one letter, one special charactere";
        endif;
        include "view/auth/signup.php";
    break;
    default:
        include "view/public/404.php";
}