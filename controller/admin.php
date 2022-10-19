<?php
switch(PATH){
    case "admin":
    case "dashboard":
    case "login":
    case "signin":
        // include "view/admin/dashboard.php";
        
        die('dashboard');
    break;
    case 'home':
        die('home');
    break;
    default:
        include "controller/public.php";
}