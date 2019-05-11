<?php 
include("includes/dbconfig.php"); 
include("includes/functions.php"); 
?>
<!doctype html>
<html>
	<head>
		<title>Noble Smart Academy</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/global.css">
		<meta name="viewport" content="width=device-width; initial-scale=1; user-scalable=true;">
	</head>
	<body>
	<?php
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$sql='INSERT INTO `students` (`id`, `first_name`, `last_name`, 
			`email`,`password`) 
			VALUES (NULL, $fname, $lname, $email, MD5($password));';
		var_dump($sql);
		$result = mysqli_query($link, $sql);	
		if (!$result) {
		$error = 'Error fetching data: ' . mysqli_error($link);
		echo $error;
		exit();
		}    
	?>   
	</body>
</html>
