<?php
include "database.php";
class MSF 
{    
    private $_host = DATABASE_SERVER;
    private $_username = DATABASE_ROOT;
    private $_password = DATABASE_PASSWORD;
    private $_database = DATABASE_NAME;
    protected $connexion;
  
    public function __construct()
    {
        $this->connexion = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
    }
    public function is_db_connected() 
    {
        return $this->connexion->connect_errno == 0;
    }
    public function execute($query) 
    {
        return $this->connexion->query($query);
    }
    public function fetch_all($query) 
    {
        return $this->connexion->query($query)->fetch_all(MYSQLI_ASSOC);
    }
    public function fetch_array($query) 
    {
        return $this->connexion->query($query)->fetch_array(MYSQLI_ASSOC);
    }
    public function checkIfblocked($ip)
    {   
        return $this->connexion->query("SELECT * FROM blocked_ip WHERE ip = '$ip'")->num_rows > 0;  
    }
    public function isEmailExist($email)
    {        
        return $this->connexion->query("SELECT * FROM users WHERE email = '$email'")->num_rows > 0;  
    }
    public function isLoginCorrect($email,$password)
    {        
        return $this->connexion->query("SELECT * from users WHERE (username = '$email' OR email = '$email') AND `password`='$password'")->num_rows > 0;
    }
    public function isUserExist($username, $id = null)
    {   $ext = $id == null ? '': "AND id <> '$id'";
        return $this->connexion->query("SELECT * from users WHERE (username = '$username' OR email = '$username') $ext")->num_rows > 0;  
    }
    public function isUserActive($username)
    {   
        return $this->connexion->query("SELECT * from users WHERE ( username = '$username' OR email = '$username' ) AND active = 1")->num_rows > 0;  
    }
    public function selectUserDataByToken($session_token)
    {        
        return $this->connexion->query("SELECT * FROM users WHERE session_token = '$session_token'")->fetch_array(MYSQLI_ASSOC);   
    }
    public function selectUserData($username)
    {        
        return $this->connexion->query("SELECT * FROM users WHERE username = '$username' OR email = '$username'")->fetch_array(MYSQLI_ASSOC);   
    }
}

session_start();
/*-------------ERRORS-------------*/
ini_set('display_errors', 'On');
error_reporting(E_ALL);

/*--------------DIRS------------------ */
define("_BASE_","/".basename(__DIR__)."/");
// define("DIR", "/");

define("PROTOCOL","https://");
define("DOMAIN", $_SERVER['SERVER_NAME']);
define("URL",PROTOCOL.DOMAIN._BASE_);
define("PATH",str_replace(_BASE_,"", $_SERVER["REDIRECT_URL"] ?? ""));

/*------------- DATA UNITES -------------*/
define('KB', 1024);
define('MB', KB * KB);
define('GB', MB * KB);

/*--------------------------------------*/
define("ROLES",array("admin","coach"));
define("ROLE", $_SESSION["role"] ?? "public");
define("TOKEN",$_SESSION["token"] ?? md5(time()));
$_SESSION["token"] = TOKEN;





/*-------------URL-------------*/

function redirect($path){
    header('Location: '.URL.$path);
}

// LOGOUT
if(PATH == "logout") {
    if(isset($_SESSION['user_id'])) {
        if(isset($_COOKIE['session_token'])) {
            setcookie('session_token', null, -1, '/'); 
            $db->execute("UPDATE users SET session_token = NULL WHERE user_id = '{$_SESSION['user_id']}'");
        }   
        session_unset(); 
        session_destroy(); 
    }
    redirect("signin"); 
}

$db = new MSF();

if(isset($db)):

/*------------------ if tables not exists-----------------*/
// foreach($sql as $i => $q){ $db->execute($q); }


// CHECK CONNEXION
ini_set('display_errors', '0');
if(!$db->is_db_connected()) die("Erreur de connection");
ini_set('display_errors', 'On');

// ACCESS DENIED FOR BLOCKED IP
if($db->checkIfblocked($_SERVER['REMOTE_ADDR'])) die("ACCESS DENIED!");

function blockThisIp() {
    global $db;
    return $db->execute("INSERT INTO blocked_ip (ip) VALUES ('{$_SERVER['REMOTE_ADDR']}')"); 
}

endif;


/*------------------GLOBAL FUNCTIONS-----------------*/


function sanitize_array_assoc(&$array)
{
    foreach($array as $a => &$b)
    {
        $b = filter_var($b, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    return $array;
}
function tokenize($_token)
{
    if($_token ==  getifset($_SESSION['token'], TOKEN)) 
    {
        $_SESSION['token'] = md5(time());
        return true;
    }
    return false;
}
function isEmailValid($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);       
}
function isPasswordStrong($password)
{
    return strlen($password) > 7 && preg_match("#[0-9]+#", $password) && preg_match("#[a-zA-Z]+#", $password) && preg_match('#[^\w]#', $password);
}
function pp(&$var){
    echo "<pre>";
        var_dump($var);
    echo "<pre>";
}
function in_multi_array_assoc($needle, $key, $array){
    foreach($array as $ar){
        if($ar[$key] == $needle) return true;
    }
    return false;
}
function upload_files($files)
{
    $paths = [];
    $count = sizeof($_FILES[$files]['name']);
    for($i=0;$i<$count;++$i)
    {
        $file_name = $_FILES[$files]['name'][$i];
        $file_tmp = $_FILES[$files]['tmp_name'][$i];
        $file_size = $_FILES[$files]['size'][$i];
        $file_ext = explode('.', $file_name)[1];
        $file_ext = strtolower($file_ext);
        $allowed = ['png','jpg','jpeg'];
        
        if(in_array($file_ext, $allowed) && $file_size < 25*MB)
        {
            $new_file_name = "IMG_".strtoupper(time().uniqid());
            $path = $new_file_name.'.'.$file_ext;
            $file_des = UPLOADS .'/'.$path;
            move_uploaded_file($file_tmp, $file_des);
            $paths[] = $path;
        }
    }
    return $paths;
}

function upload_file($file)
{
    $path = '';
        $file_name = $_FILES[$file]['name'];
        $file_tmp = $_FILES[$file]['tmp_name'];
        $file_size = $_FILES[$file]['size'];
        $file_ext = explode('.', $file_name)[1];
        $file_ext = strtolower($file_ext);
        $allowed = ['png','jpg','jpeg'];
        
        if(in_array($file_ext, $allowed) && $file_size < 25*MB)
        {
            $new_file_name = "IMG_".strtoupper(time().uniqid());
            $path = $new_file_name.'.'.$file_ext;
            $file_des = UPLOADS .'/'.$path;
            move_uploaded_file($file_tmp, $file_des);
            
        }
    
    return $path;
}

extract(sanitize_array_assoc($_REQUEST));