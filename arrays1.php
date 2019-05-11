<?php 
  include("includes/vehicles.php"); 
  include("includes/functions.php"); 
?>
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
        function showArray($aa, $title=null){
          $strOut = $title!=null ? $title : "Title not found";
          echo "<h1>$strOut</h1>";
          foreach ($aa as $month => $day) {
            echo "$month has $day days in the month<br />";
          }  
        }

        $months = array("Jan", "Feb", "Mar");
        var_dump($months);
        echo "<ol>Months in a year:before";
        $i=0;
        while($i < sizeof($months)){
            echo "<li>$months[$i]</li>";
            $i++;
        }
        echo "</ol>";
        array_push($months, "Apr"); // adding into array using array_push
        $months[] = "May";  // adding using [] notation
        var_dump($months);
        echo "<ol>Months in a year:after";
        $i=0;
        while($i < sizeof($months)){
            echo "<li>$months[$i]</li>";
            $i++;
        }
        echo "</ol>";
        $aaMonths = array(
           "January"=>31, "February"=>28, 
           "March"=>31, "April"=>30
        );
        $aaMonths["May"] = 31;
//        var_dump($aaMonths);
        showArray($aaMonths, "Months in the year");
    ?>
    <p>Associative Array example</p>
    <?php
        $kittenColors = array(
          'Fluffy' => 'tabby',
          'Midnight' => 'black',
          'Admiral Snuggles' => 'white',
        );
        
        showArray($kittenColors);
        // foreach ($kittenColors as $name => $color) {
        //   echo 'The kitten ' . $name . ' has ' . $color . ' fur.<br />';
        // }
//         showMonths($months);
//         array_push($months, "Apr");
//         array_push($months, "May");
//         showMonths($months);

//         $aaMonths = array(
//             array("name"=>"January","days"=>31),
//             array("name"=>"February","days"=>28),
//             array("name"=>"March","days"=>31),
//             array("name"=>"April","days"=>30)
//         );
//         $may = array("name"=>"May", "days"=>31);
//         var_dump($may);
//         $jun = array("name"=>"Jun", "days"=>30);
// //        var_dump($aaMonths);
//         array_push($aaMonths, $may);
//         array_push($aaMonths, $jun);
//         showAAmonths($aaMonths);
        
//         // showVehicles($vehicles, "Toyota");
//         showVehicles($vehicles);
    ?>
    <p>
    <?php
    ?>
    </p>
  </body>
</html>