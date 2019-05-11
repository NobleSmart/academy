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
                <h3>Edit a Courses</h3>
                <?php
                    // var_dump($link);
					$qs = $_SERVER["QUERY_STRING"];
					$page = $_SERVER["PHP_SELF"];
					$method = $_SERVER["REQUEST_METHOD"];
					// var_dump($qs);
					var_dump($method);
                    $val = $qs!=null ? explode("=",$qs)[1] : "";
					// var_dump($val);
					if ($method=="GET"){
						if ($val=="") getCourses();                    
						else getCourseForm($val, $page);	
					} else {
						echo "Saving course";
						saveCourse();
					}
                    echo 'Return to <a href="index.php">home</a>.'                                 
                ?>
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
</html>
