
<?php
$errors = [];
if($_SERVER['REQUEST_METHOD'] == "POST"):
    if(isset($create_pack)){
        if(empty($title)) $errors [] = "title is empty!";
        if(empty($description)) $errors [] = "description is empty!";
        if(empty($content)) $errors [] = "content is empty!";
        if(empty($duration)) $errors [] = "duration is empty!";
        if(empty($price)) $errors [] = "price is empty!";
       // if(empty($image)) $errors [] = "image is empty!";
        
        
        
        //if(empty($username)) $errors [] = "Username is empty!";
        //if(empty($password)) $errors [] = "Password is empty!";

       // if($db->isUserExist($username)) $errors [] = "Username already exist!";
       // if($db->isUserExist($email)) $errors [] = "Email already exist!";
        //if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors [] = "Email not valid!";
        if(empty($errors)){
            //$uid = uniqid('u');
            $created = $db->execute(
                "INSERT INTO packs (title,description,content, duration,price,image) VALUES ('$title','$description','$content','$duration','$price','$image')"
                                   );
            if(!$created) $errors [] = "Error: Somthing wrong happen!";
            else unset($title,$description,$content,$duration,$price,$image);
        }
    }
endif;