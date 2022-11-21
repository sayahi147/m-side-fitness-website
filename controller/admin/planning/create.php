<?php
$errors = [];
if($_SERVER['REQUEST_METHOD'] == "POST"):
    if(isset($create_planning)){
        if(empty($jour)) $errors [] = "jour est vide !";
        if(empty($time)) $errors [] = "temps est vide!";
        if(empty($cours)) $errors [] = "cours est vide!";
        if(empty($coach)) $errors [] = "coach est vide!";
        
       // if(empty($image)) $errors [] = "image is empty!";
        
        
        
        //if(empty($username)) $errors [] = "Username is empty!";
        //if(empty($password)) $errors [] = "Password is empty!";

       // if($db->isUserExist($username)) $errors [] = "Username already exist!";
       // if($db->isUserExist($email)) $errors [] = "Email already exist!";
        //if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors [] = "Email not valid!";
        if(empty($errors)){
            //$uid = uniqid('u');
            $created = $db->execute(
                "INSERT INTO planning (cours,coach,jour, time) VALUES ('$cours','$coach','$jour','$time')"
                                   );
            if(!$created) $errors [] = "Error: Somthing wrong happen!";
            else unset($cours,$coach,$jour,$time);
        }
    }
endif;