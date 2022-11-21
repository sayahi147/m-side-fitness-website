<?php
$errors = [];
if($_SERVER['REQUEST_METHOD'] == "POST"):
    if(isset($create_account)){
        if(empty($fullname)) $errors [] = "Fullname is empty!";
        if(empty($phone)) $errors [] = "Phone is empty!";
        if(empty($email)) $errors [] = "Email is empty!";
        if(empty($username)) $errors [] = "Username is empty!";
        if(empty($password)) $errors [] = "Password is empty!";
        if(empty($description)) $errors [] = "description is empty!";

        if($db->isUserExist($username)) $errors [] = "Username already exist!";
        if($db->isUserExist($email)) $errors [] = "Email already exist!";
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors [] = "Email not valid!";
        if(empty($errors)){
            $uid = uniqid('u');
            $req = "INSERT INTO users (user_id, username, fullname, password, email,description, phone) VALUES ('$uid', '$username','$fullname','$password','$email','$description','$phone')";
            var_dump($req);
            $created = $db->execute($req);
            if(!$created) $errors [] = "Error: Somthing wrong happen!";
            else unset($uid, $username, $fullname, $password, $email, $phone);
        }
    }
endif;