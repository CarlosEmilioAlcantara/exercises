<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2); // Round to the 2nd 
                                               // decimal
    
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Circumference = {$circumference}cm <br>";
    echo "Area = {$area}cm^2 <br>";
    echo "Volume = {$volume}cm^3 <br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<style>
  form {
    display: flex;
    flex-direction: column;
    gap: 2px;
  }

  input {
    width: fit-content;
  }
</style>
<body>
 <br>
 <form action="circle.php" method="post">
  <label for="radius">Radius: </label>
  <input type="text" name="radius">

  <input type="submit" value="Calculate">
 </form>
 <br>
 <a href="./index.php">Index</a>
 <a href="./echoing.php">Echoing</a>
 <a href="./variables.php">Variables</a>
 <a href="./arithmetic.php">Arithmetic</a>
 <a href="./restaurant.php">Restaurant</a>
 <a href="./getpost.php">Get & Post</a>
 <a href="./functions.php">Functions</a>
 <a href="./if.php">If Else ElseIf</a>
 <a href="./logicops.php">Logical Operators</a>
 <a href="./switch.php">Switch</a>
 <a href="./for.php">For</a>
 <a href="./while.php">While</a>
 <a href="./arrays.php">Arrays</a>
 <a href="./associative-arrays.php">Associative Arrays</a>
 <a href="./isset-empty.php">isset & empty</a>
 <a href="./radiobuttons.php">Radiobuttons</a>
 <a href="./checkboxes.php">Checkboxes</a>
 <a href="./functions-deux.php">Custom Functions</a>
 <a href="./string-functions.php">String Functions</a>
 <a href="./sanitize-validate.php">Sanitize & Validate</a>
 <a href="./include.php">Include</a>
 <a href="./cookie.php">Cookie</a>  
 <a href="./server.php">Server</a>
</body>
</html>