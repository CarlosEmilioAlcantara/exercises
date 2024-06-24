<?php
    // Logical operators = combine conditional statements
    //                     if (condition1 && condition2)

    // &&/and = And, True if both conditions are true
    // ||/or = Or, True if one condition is true
    //  ! = Not, True if False, False if True

    $temp = 25;

    echo "Using && operator: <br>";
    // if ($temp >= 0 and $temp <= 30) 
    if ($temp >= 0 && $temp <= 30) {
        echo "The weather is good";
    } else {
        echo "The weather is bad";
    }

    echo "<br><br>";

    echo "Using || operator: <br>";
    // if ($temp < 0 or $temp > 30) {
    if ($temp < 0 || $temp > 30) {
        echo "The weather is bad";
    } else {
        echo "The weather is good";
    }

    // $cloudy = true;
    $cloudy = false;

    echo "<br><br>";

    echo "Without ! operator: <br>";
    if ($cloudy) {
        echo "Maulap";
    } else {
        echo "Di maulap";
    }

    echo "<br>";

    echo "With ! operator: <br>";
    if ($cloudy) {
        echo "Di maulap";
    } else {
        echo "Maulap";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <br>
 <div class="links">
  <a href="./index.php">Index</a>
  <a href="./echoing.php">Echoing</a>
  <a href="./variables.php">Variables</a>
  <a href="./arithmetic.php">Arithmetic</a>
  <a href="./getpost.php">Get & Post</a>
  <a href="./restaurant.php">Restaurant</a>
  <a href="./functions.php">Functions</a>
  <a href="./circle.php">Circle</a>
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
  <a href="./hashing.php">Hashing</a>
 </div>
</body>
</html>