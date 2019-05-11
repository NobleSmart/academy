<!DOCTYPE html>
<html>
  <head>
    <title>PHP Test Page</title>
  </head>
  <body>
    <?php
        include("nav.php");
    ?>
    <h1>My First PHP Page</h1>
    <p>
      <?php
      /* this is how you write multiple comment lines
      inside a php code */
      echo '<p>Hello World from PHP<br/>'; // comment for single line
      echo "Hello this is the second line<br/>";
      echo "I'm going Mc Donald's after class<br/>";
      echo 'But I don\'t like Mc Donald\'s</p>';
      // multiple lines with echo: use string concacenation
      echo "<p>SAMPLE 1: This is the first line <br/>
        This is the second line<br/>
        This is line three</p>";
      echo "<p>SAMPLE 2: This is the first line <br/>".
        "This is the second line<br/>".
        "This is line three</p>";
      ?>
    </p>
  </body>
</html>