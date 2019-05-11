<?php 
include("includes/cookies.php");
include("includes/dbconfig.php"); 
include("includes/functions.php"); 
// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 
setcookie("fullname", "", time() - 3600);
header("Location: index.php");
?>