<?php

/*-------------ERRORS-------------*/

ini_set('display_errors', 'On');

error_reporting(E_ALL);



/*--------------DIRS------------------ */

define("_BASE_","/".basename(__DIR__)."/");

define("PROTOCOL","https://");

define("DOM",$_SERVER['SERVER_NAME']);

define("URI",PROTOCOL.DOM._BASE_);


/*-------------URI-------------*/

$uri = explode("?",$_SERVER["REQUEST_URI"])[0];

$route = trim(strtolower(substr($uri,strlen(_BASE_))),'/');


