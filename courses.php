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
			function search(){
				var keywords = $("#keywords").val();
				$.get("search.php", keywords, 
					function(response{
						
					})
				)
			}
		</script>
	</head>
	<body>
		<?php include("includes/nav.php"); ?>
		<section id="main-content">
			<div class="container">
				<h3>Courses at Noble Smart Academy</h3>
				<p>
					<input type="text" id="keywords" name="keywords"/>
					<input type="button" onclick="search()" value="Search"/>
				</p>
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
		<?php include("includes/footer.php"); ?>
	</body>
</html>
