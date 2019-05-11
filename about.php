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
		<section id="main-content">
			<div class="container">
			<h1>My About Page</h1>
    <p>Sample paragraph</p>
    <?php
        $myCat = "Willie";
        $yearBorn = 2008;
        $age = 2019-$yearBorn;  // sample arithmatic operation
        echo "$myCat is ".$age." years old";  // string concacenation

        $firstName = "Bruce";
        $lastName = "Wayne";
        $born = 1970;
    ?>
    <p>
    <?php
        sayHello($firstName, $lastName, $born, "M", "Batman");
        sayHello("Clark", "Kent", 1980, "m", "Superman");
        sayHello("Diana", "Prince", 1920, "F", "Wonder Woman");

        $degF = convertCtoF(100);
        echo "100 deg C = $degF deg F";
    ?>			</div>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
</html>
