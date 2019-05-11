<?php 
include("includes/cookies.php");
include("includes/dbconfig.php"); 
include("includes/functions.php"); 
// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 
$cookie_name = "fullname";
$cookie_value = NULL;        
$_COOKIE[$cookie_name] = NULL;
setcookie($cookie_name, $cookie_value, time() - 3600, "/"); // 86400 = 1 day    
$cookie_name = "userid";
$cookie_value = NULL;        
$_COOKIE[$cookie_name] = NULL;
setcookie($cookie_name, $cookie_value, time() - 3600, "/"); // 86400 = 1 day    
// setcookie("fullname", "", time() - 3600);
// setcookie("userid", "", time() - 3600);
echo "Cookie 'user' is deleted.";
var_dump($_COOKIE);
header("Location: index.php");
?>