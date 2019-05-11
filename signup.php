<?php 
include("includes/cookies.php");
include("includes/dbconfig.php"); 
include("includes/functions.php"); 
$_courseId = $_POST["courseId"];
$_userId = $_POST["userId"];
$regStatus = signupForClass($_courseId, $_userId);
echo $regStatus;
?>