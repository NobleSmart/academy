<?php include("includes/functions.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP Test Page</title>
  </head>
  <body>
    <?php
        include("nav.php");
    ?>
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
    ?>
    </p>
  </body>
</html>