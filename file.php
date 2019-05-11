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
        echo "<h2>Reading static file</h2>";
        echo readfile("includes/dictionary.txt");
        echo "<h2>Reading JSON file</h2>";
        $myfile = readfile("includes/vehicles.json");
//        echo "FILE:".$myfile."<br/>";
        $json_string = 'includes/vehicles.json';
        $jsondata = file_get_contents($json_string);
        $obj = json_decode($jsondata, true);
//        echo "<pre>";
//        var_dump($obj);
        foreach($obj as $o){
//          var_dump($o);
          echo "<p>Brand: ".$o["brand"]."<br/>";
          $models = join(", ", $o["models"]);
          echo "Models: $models</p>";
        // echo "<h2>Brand: $v</h2>";
        //     foreach($v as $x){
        //        var_dump ($x);
        //     }
        }
//        showVehicles($obj);
      ?>
      <script type="text/javascript">
         var jsonVehicles = "<?php echo $obj; ?>";
         console.log('[jsonVehicles]', jsonVehicles);
      </script>
    <p>
    <?php
    ?>
    </p>
  </body>
</html>