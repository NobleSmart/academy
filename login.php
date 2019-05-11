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
		$email = $_POST["email"];
		$password = $_POST["password"];
		$sql='select * from `students` where email="'.$email.'" and password=MD5("'.$password.'")';
		var_dump($sql);
		$result = mysqli_query($link, $sql);	
//		var_dump($result);
		if (!$result) {
			$error = 'Error fetching data: ' . mysqli_error($link);
			echo $error;
			exit();
		}
		$loggedInUser = mysqli_fetch_array($result);
		if ($loggedInUser!=null){
			var_dump($loggedInUser);
			$cookie_name="user";
			$cookie_value = $loggedInUser["first_name"] + " " + $loggedInUser["last_name"];
			var_dump($loggedInUser);
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			var_dump($cookie_name);
			var_dump($cookie_value);
			header("Location: index.php");
		} else {
			header("Location: account.php");
		}
	?>   
	</body>
</html>
