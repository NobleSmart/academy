<?php include("includes/functions.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP String Page</title>
  </head>
  <body>
    <?php
        include("nav.php");
    ?>
    <h1>My String Page</h1>
    <p>Sample Table with String</p>
    <?php
      $str = "The quick brown fox jumps over the lazy dog";
      echo "<p>$str</p>";
      echo "The sencence contains ".strlen($str)." characters and ".
        str_word_count($str)." words<br/>";
      echo "Reversed sentence: ".strrev($str);
    ?>
    <p>
    <?php
    ?>
    </p>
  </body>
</html>