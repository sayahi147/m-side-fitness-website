<?php
$errors = [];
if($_SERVER['REQUEST_METHOD'] == "POST"):
    if(isset($update_planning))
    {   
        if(empty($jour)) $errors [] = "jour est vide!";
        if(empty($cours)) $errors [] = "cours est vide!";
        if(empty($coach)) $errors [] = "coach est vide!";
        if(empty($time)) $errors [] = "time est vide!";
       // if($db->isUserExist($email, $id)) $errors [] = "Email already exist!";
        //if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors [] = "Email not valid!";
        if(empty($errors)){
            $updated = $db->execute("UPDATE planning SET cours = '$cours', coach = '$coach', jour = '$jour', time = '$time' WHERE id = '$id'");
            if(!$updated) $errors [] = "Error: Somthing wrong happen!";
        }

    }
    /*elseif( isset($update_password)){
        if(empty($username)) $errors [] = "Username is empty!";
        if(empty($password)) $errors [] = "Password is empty!";
        if($db->isUserExist($username, $id)) $errors [] = "Username already exist!";
        if(empty($errors)){
            $updated = $db->execute("UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'");
            if(!$updated) $errors [] = "Error: Somthing wrong happen!";
        }
    }
     elseif(isset($update_active)){
        $updated = $db->execute("UPDATE users SET active = '$active' WHERE id = '$id'");
        if(!$updated) $errors [] = "Error: Somthing wrong happen!";   
    }*/
endif;
if(isset($id)){
    $data = $db->fetch_array("SELECT * FROM planning WHERE id = '$id'");
    extract($data);
}else{
    redirect('plannig');
}