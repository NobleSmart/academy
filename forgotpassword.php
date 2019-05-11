<?php 
include("includes/cookies.php");
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
		<script>
		function register(){
			console.log("Registering");
			var response = "";
			var fname = document.getElementById("fname").value;
			var lname = document.getElementById("lname").value;
			var email = document.getElementById("email").value;
			var password = document.getElementById("password").value;
			console.log('[fname]', fname);
			var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("frmResult") = this.responseText;
				}
			};
			var str="fname="+fname+"&lname="+lname+"&email="+email+"&password="+password;
			xmlhttp.open("POST", "register_user.php?" + str, true);
			xmlhttp.send();
		}
		</script>
	</head>
	<body>
		<?php include("includes/nav.php"); ?>
		<section id="main-content">
			<div class="container">
                <h3>Register at Noble Smart Academy</h3>
				<form id="frmRegistration">
				<fieldset>
					<legend>Enter your information</legend>
					First Name: <input type="text" id="fname" name="fname"><br>
					Last Name: <input type="text" id="lname" name="lname"><br>
					E-mail: <input type="email" id="email" name="email"><br>
					Password: <input type="password" id="password" name="password"><br>
					<input type="button" id="btnRegister" onClick="register()" value="Submit" class="btn btn-primary">
					<input type="reset" value="Reset" class="btn btn-warning">
				</fieldset> 
				</form>				
			</div>
			<div id="frmResult"></div>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
</html>