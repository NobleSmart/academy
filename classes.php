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
		function signup(cId, uId){
			console.log('Signing-up course Id=' + cId + ' for userId=' + uId);
			alert('UserId=' + uId + ' have been signed-up for courseId=' + cId);
			var param = {
				courseId: cId,
				userId: uId
			};
			console.log('[param]', param);
			$.post("signup.php", param, 
				function(param, response){
					alert("Data: " + param + "\nResponse: " + response);
					if (param!= "" && response == "success"){
						// window.location.href = 'index.php';
					}
				});

		}
		</script>
	</head>
	<body>
		<?php include("includes/nav.php"); ?>
		<section id="main-content">
			<div class="container">
                <h3>Classes at Noble Smart Academy</h3>
				<?php
					echo 
					getClasses();				
                    echo 'Return to <a href="index.php">home</a>.'                                 
                ?>
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
</html>
