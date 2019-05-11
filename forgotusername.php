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
		function forgetUser(){
			console.log("Forget User");
			var response = "";
			var emailVal = $("#email").val();
			console.log('[email]', email);
			var param = {
				email: emailVal
			};
			$.post("sendforgetuser.php", param, 
				function(param, response){
					alert("Data: " + param + "\nResponse: " + response);
					if (param!= "" && response == "success"){
						// window.location.href = 'index.php';
					}
				}
			);			
		}
		</script>
	</head>
	<body>
		<?php include("includes/nav.php"); ?>
		<section id="main-content">
			<div class="container">
                <h3>Forgot Username at Noble Smart Academy</h3>
				<form id="frmForgetUsername">
				<fieldset>
					<legend>Enter the email associated with you</legend>
					E-mail: <input type="email" id="email" name="email"><br>
					<input type="button" id="btnForgetUser" onClick="forgetUser()" value="Submit" class="btn btn-primary">
					<input type="reset" value="Reset" class="btn btn-warning">
				</fieldset> 
				</form>				
			</div>
			<div id="frmResult"></div>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
</html>