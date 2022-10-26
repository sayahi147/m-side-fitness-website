<?php 

// ob_start();
require_once 'init.php';
// die(ROLE);

if(ROLE == "admin"):
    include "route/admin.php"; 
    
elseif(ROLE == "membre"):
    include "route/membre.php";  

else:
    include "route/public.php";

endif;

// $echo = preg_replace("/\/\/(.*)\r\n|<!--(.*)-->|\/\*(.*)\*\/|[\n\r]|\t+/Uis", "", ob_get_contents());
// ob_end_clean();
// echo $echo;
// ob_end_flush();

