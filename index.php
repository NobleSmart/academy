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
	</head>
	<body>
		<?php include("includes/nav.php"); ?>
		<section id="hero">
			<img src="images/newnoblesmart.png" alt="Noble Smart" />
			<h2>Noble Smart Academy</h2>
			<span class="city">Register</span>
		</section>
		<section id="main-content">
			<div class="container">
				<h3>Welcome to Noble Smart Academy</h3>
				<section class="column" id="home">
					<img src="images/africa.png" alt="Africa">
					<h4>Locations</h4>
					<p>Wild zebras live in Africa. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur.</p>
					<a href="" class="btn">Select Location</a>
				</section>
				<section class="column" id="diet">
					<img src="images/grass.jpg" alt="Grass">
					<h4>Courses</h4>
					<p>Zebras eat grass primarily. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur.</p>
					<a href="" class="btn">List Courses</a>
				</section>
				<section class="column" id="pattern">
					<img src="images/stripes.jpg" alt="Zebra Stripes">
					<h4>Register</h4>
					<p>Each Zebra has a unique stripe pattern. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur.</p>
					<a href="" class="btn">Register for Classes</a>
				</section>
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
</html>
