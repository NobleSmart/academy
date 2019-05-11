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
	</head>
	<body>
		<?php include("nav.php"); ?>
		<section id="main-content">
			<div class="container">
                <h3>Courses at Noble Smart Academy</h3>
                <?php
                    // var_dump($link);
                    $qs = $_SERVER["QUERY_STRING"];
                    // var_dump($qs);
                    $val = $qs!=null ? explode("=",$qs)[1] : "";
                    // var_dump($val);
                    if ($val=="") getCourses();                    
                    else getCourseDetail($val);
                    echo 'Return to <a href="index.php">home</a>.'                                 
                ?>
			</div>
		</section>
		<section id="social">
			<div class="container">
				<h3>I'm pretty social too. We should be friends.</h3>
				<ul>
					<li><img src="images/facebook.svg" alt="Facebook" /></li>
					<li><img src="images/twitter.svg" alt="Twitter" /></li>
					<li><img src="images/instagram.svg" alt="Instagram" /></li>
					<li><img src="images/linkedin.svg" alt="LinkedIn" /></li>
				</ul>
			</div>
		</section>
		<footer>
			<p>&copy; 2015 IMA Zebra</p>
		</footer>
	</body>
</html>
