<?php
switch(PATH){
    case "admin":
    case "dashboard":
    case "login":
    case "signin":
        include "view/admin/dashboard.php";
    break;

    /* Planning */
    case "planning":
        include "view/admin/planning/index.php";
    break;
    case "planning/create":
        include "view/admin/planning/create.php";
    break;
    case "planning/delete":
        include "view/admin/planning/delete.php";
    break;
    case "planning/update":
        include "view/admin/planning/update.php";
    break;
    case "planning/read":
        include "view/admin/planning/read.php";
    break;

    /* Pricing */
    case "pricing":
        include "controller/admin/prices/index.php";
        include "view/admin/pricing/index.php";
    break;
    case "pricing/create":
        include "controller/admin/prices/create.php";
        include "view/admin/pricing/create.php";
    break;
    case "pricing/delete":
        include "controller/admin/prices/delete.php";
        include "controller/admin/prices/index.php";
        include "view/admin/pricing/index.php";
    break;
    case "pricing/update":
        include "controller/admin/prices/update.php";
        include "view/admin/pricing/update.php";
    break;
    case "pricing/read":
        include "view/admin/pricing/read.php";
    break;

    /* Coachs */
    case "coachs":
        include "controller/admin/coachs/index.php";
        include "view/admin/coachs/index.php";
    break;
    case "coachs/create":
        include "controller/admin/coachs/create.php";
        include "view/admin/coachs/create.php";
    break;
    case "coachs/delete":
        include "controller/admin/coachs/delete.php";
        include "controller/admin/coachs/index.php";
        include "view/admin/coachs/index.php";
    break;
    case "profil":
        $id = $_SESSION['id'];
    case "coachs/update":
        include "controller/admin/coachs/update.php";
        include "view/admin/coachs/update.php";
    break;
    case "coachs/read":
        include "view/admin/coachs/read.php";
    break;

    default:
        include "controller/public.php";
}