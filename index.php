<!DOCTYPE html>
<html>
<head>

 <?php

  $y = $_GET['y'];
  $m = $_GET['m'];
  $d = $_GET['d'];
  

  echo "Current date: <br>";
  echo date("y-m-d");
  echo "<br><br> Input date: <br>";
  echo $_GET['y'];
  echo "-";
  echo $_GET['m'];
  echo "-";
  echo $_GET['d'];


  $color;
   if ($y < 17) {
    $color = "red";
   }
   else{
    $color = "orange";
   }

   ?>

 <title>Test PHP</title>

 <style>
    body{
     background-color: <?php echo $color ?>;
    }
   </style>

</head>

   <body>
  


   </body>
</html>