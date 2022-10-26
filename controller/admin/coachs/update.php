<?php
$errors = [];
if($_SERVER['REQUEST_METHOD'] == "POST"):
    if(isset($update_information)){
        if(empty($fullname)) $errors [] = "Fullname is empty!";
        if(empty($phone)) $errors [] = "Phone is empty!";
        if(empty($email)) $errors [] = "Email is empty!";
        if($db->isUserExist($email, $id)) $errors [] = "Email already exist!";
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors [] = "Email not valid!";
        if(empty($errors)){
            $updated = $db->execute("UPDATE users SET fullname = '$fullname', email = '$email', phone = '$phone', address = '$address', description = '$description' WHERE id = '$id'");
            if(!$updated) $errors [] = "Error: Somthing wrong happen!";
        }

    }elseif( isset($update_password)){
        if(empty($username)) $errors [] = "Username is empty!";
        if(empty($password)) $errors [] = "Password is empty!";
        if($db->isUserExist($username, $id)) $errors [] = "Username already exist!";
        if(empty($errors)){
            $updated = $db->execute("UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'");
            if(!$updated) $errors [] = "Error: Somthing wrong happen!";
        }
    }elseif(isset($update_active)){
        $updated = $db->execute("UPDATE users SET active = '$active' WHERE id = '$id'");
        if(!$updated) $errors [] = "Error: Somthing wrong happen!";   
    }
endif;
if(isset($id)){
    $data = $db->fetch_array("SELECT * FROM users WHERE id = '$id'");
    extract($data);
}else{
    redirect('coachs');
}