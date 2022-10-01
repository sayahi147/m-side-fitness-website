<?php
$active_page = "";
switch($route){
    case "":
    case "home":
    case "index":
        $active_page = "home";
        include "view/public/home.php";
    break;
    case "about":
        $active_page = "about";
        include "view/public/about.php";
    break;
    case "price":
        $active_page = "price";
        include "view/public/price.php";
    break;
    case "faq":
        $active_page = "faq";
        include "view/public/faq.php";
    break;
    case "table":
        $active_page = "table";
        include "view/public/table.php";
    break;
    case "classes":
        $active_page = "classes";
        include "view/public/classes.php";
    break;
    case "class":
        $active_page = "classes";
        include "view/public/classes/class.php";
    break;
    case "portfolios":
        $active_page = "portfolios";
        include "view/public/portfolios.php";
    break;
    case "portfolio":
        $active_page = "portfolios";
        include "view/public/portfolios/portfolio.php";
    break;
    case "contact":
        $active_page = "contact";
        $alert = '';
        if(isset($_POST['submit'])):
            sanitize_array_assoc($_POST);
            extract($_POST);
            if( !empty($name)&& !empty($phone) && !empty($email) && !empty($subject) && !empty($msg) ):
                $data = "<pre>Nom et Prenom:                   ".$name."\n Email:                 ".$email."\n Telephone:             ".$phone."\n Message:             \n".$msg." </pre>";
                $id = "ID: ".uniqid();
                $headers = "From: " . strip_tags($email) . "\r\n";
                $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
    			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    			$objet = "Sujet: $subject | ".$id;
    
                if(mail("3affset@gmail.com",$subject,$data,$headers)):
                    $alert = 'true';
                else: 
                    $alert = 'false';
                endif;
            else:
    			$alert = 'false';
            endif;
        endif;
        include "view/public/contact.php";
    break;
    default:        
        include "view/public/404.php";

}