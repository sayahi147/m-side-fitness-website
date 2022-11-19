<?php
$errors = [];
if($_SERVER['REQUEST_METHOD'] == "POST"):
    if(isset($update_pack)){
        if(empty($title)) $errors [] = "title is empty!";
        if(empty($description)) $errors [] = "description is empty!";
        if(empty($content)) $errors [] = "content is empty!";
       // if($db->isUserExist($email, $id)) $errors [] = "Email already exist!";
        //if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors [] = "Email not valid!";
        if(empty($errors)){
            $updated = $db->execute("UPDATE packs SET title = '$title', description = '$description', content = '$content', duration = '$duration', price = '$price' , image ='$image' WHERE id = '$id'");
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
    }/*elseif(isset($update_active)){
        $updated = $db->execute("UPDATE users SET active = '$active' WHERE id = '$id'");
        if(!$updated) $errors [] = "Error: Somthing wrong happen!";   
    }*/
endif;
if(isset($id)){
    $data = $db->fetch_array("SELECT * FROM packs WHERE id = '$id'");
    extract($data);
}else{
    redirect('pricing');
}