<?php 
include("includes/cookies.php");
include("includes/dbconfig.php"); 
include("includes/functions.php"); 
$_email = $_POST["email"];
// the message
$msg = "Hello $_email\nYou have requested a username recovery";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

$retval = "";
// send email
try{
    mail("oscar.zaky@gmail.com","Forget Username from NobleSmart Academy",$msg);
    mail($_email,"Forget Username from NobleSmart Academy",$msg);    
    $retval = "Message sent";
}
catch (Exception $e){
    $retval = "Unable to send email. Error: $e";
}

echo $retval;
?>