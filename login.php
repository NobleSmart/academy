<?php 
include("includes/cookies.php");
include("includes/dbconfig.php"); 
include("includes/functions.php"); 
?>
<!doctype html>
<html>
	<head>
		<title>Noble Smart Academy</title>
		<?php include("includes/head.php"); ?>
		<script>
		function login(){
			console.log("Registering");
			var response = "";
			var emailVal = $("#email").val();
			var passwordVal = $("#password").val();
			console.log('[email]', emailVal);
			console.log('[password]', passwordVal);
			var param = {
				email: emailVal,
				password: passwordVal
			};
			console.log('[param]', param);
			$.post("userlogin.php", param, 
				function(param, response){
					alert("Data: " + param + "\nResponse: " + response);
					if (param!= "" && response == "success"){
						window.location.href = 'index.php';
					}
				});
		}
		</script>
	</head>
	<body>
		<?php include("includes/nav.php"); ?>
		<section id="main-content">
			<div class="container">
                <h3>Register at Noble Smart Academy</h3>
				<form id="frmLogin">
				<fieldset>
					<legend>Enter your information</legend>
					E-mail: <input type="email" id="email" name="email"><br>
					Password: <input type="password" id="password" name="password"><br>
					<input type="button" id="btnLogin" onClick="login()" value="Submit" class="btn btn-primary">
					<input type="reset" value="Reset" class="btn btn-warning">
				</fieldset> 
				</form>				
			</div>
			<div id="frmResult"></div>
			<p>
				Don't have an account: <a href="register.php">Register</a>&nbsp;|&nbsp;
				<a href="forgotusername.php">Forgot Username</a>&nbsp;|&nbsp;
				<a href="forgotpassword.php">Forgot Password</a>
			</p>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
</html>