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
    <h1>My Loops Page</h1>
    <p>Sample Table with Loops</p>
    <?php
        $months = array("Jan", "Feb", "Mar");
        // echo "<ol>Months in a year:";
        // $i=0;
        // while($i < sizeof($months)){
        //     echo "<li>$months[$i]</li>";
        //     $i++;
        // }
        // echo "</ol>";
        showMonths($months);
        array_push($months, "Apr");
        array_push($months, "May");
        showMonths($months);

        $aaMonths = array(
            array("name"=>"January","days"=>31),
            array("name"=>"February","days"=>28),
            array("name"=>"March","days"=>31),
            array("name"=>"April","days"=>30)
        );
//        var_dump($aaMonths);
        showAAmonths($aaMonths);
    ?>
    <p>
    <?php
    ?>
    </p>
  </body>
</html>