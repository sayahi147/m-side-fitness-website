<?php
switch(PATH){
    case "admin":
    case "dashboard":
    case "login":
    case "signin":
        include "view/admin/dashboard.php";
    break;
    default:
        include "controller/public.php";
}