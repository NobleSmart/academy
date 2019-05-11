<?php 
include("includes/cookies.php");
include("includes/dbconfig.php"); 
include("includes/functions.php"); 
$_email = $_POST["email"];
$_password = $_POST["password"];
$fullname = getUser($_email, $_password);
echo $fullname;
?>