<?php
switch(PATH){
    case "":
    case "home":
    case "signup":
    case "signin":
    case "accueil":
        // include "view/membre/annonce/index.php";
        include "view/public/home.php";
    break;

/**************** ANNONCES ******************/
    case "collation":
        // $tables = $db->execute("show tables")->fetch_all(MYSQLI_ASSOC);
        $tables = array("annonces");
        foreach($tables as $table):
            // $table = $table ["Tables_in_11042021"];
            $db->execute("ALTER TABLE $table CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci");
            $cols = $db->execute(" SELECT COLUMN_NAME, DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$table' ")->fetch_all(MYSQLI_ASSOC);
            foreach($cols as $col):
                $DATA_TYPE = $col['DATA_TYPE'];
                $col = $col['COLUMN_NAME'];
                $db->execute("ALTER TABLE `$table` CHANGE `$col` `$col` $DATA_TYPE CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL; ");
            endforeach;
        endforeach;
    break;
    case "annonces":
        include "view/membre/annonce/index.php";
    break;
    case "annonces/create":
        if(isset($_POST['create'])):
            $success = false;
            $files_destination = upload_files("file");
            $images = json_encode($files_destination);
            $user_id = $_SESSION['user_id'];		 	 	
            $sql = "INSERT INTO annonces (title, description, category_id, type, images, price, user_id) VALUES ('$title','$description','$category_id','$type','$images','$price','$user_id')";
            if($db->execute($sql)){
                $success = true;
                header('Location: '.URL.'annonces?success');
                exit();
            } 
        endif;
        include "view/membre/annonce/create.php";
    break;
    case "annonces/delete":
        if(isset($_GET['id'])):
            $success = false; 	 	
            $sql = "DELETE FROM annonces WHERE id = '$id' AND user_id = '{$_SESSION['user_id']}'";
            if($db->execute($sql)){
                echo "true";
                // header('Location: '.URL.'annonces?success');
                // exit();
            } 
        endif;
        // include "view/membre/annonce/index.php";
    break;

    default:
        include "view/404.php";
}