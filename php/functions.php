<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    echo "x = {$x} & y = {$y} & z = {$z} <br>";

    $total = abs($x); // Get absolute value of number
    echo "<br> Getting absolute value (x): <br>";
    echo "{$total} <br>";

    $total = round($x); // Round number
    echo "Getting rounded value (x): <br>";
    echo "{$total} <br>";

    $total = floor($x); // Round number down always
    echo "Getting rounded down value (x): <br>";
    echo "{$total} <br>";

    $total = ceil($x); // Round number up always
    echo "Getting rounded up value (x): <br>";
    echo "{$total} <br>";

    $total = pow($x, $y); // Raise x to the power of y
    echo "X to the power of y (x^y): <br>";
    echo "{$total} <br>";

    $total = sqrt($x); // Get square root
    echo "Getting square root (xsqrty): <br>";
    echo "{$total} <br>";

    $total = max($x, $y, $z); // Get max from given numbers
    echo "Getting biggest number (x <=> y <=> z): <br>";
    echo "{$total} <br>";

    $total = min($x, $y, $z); // Get smallest from given numbers
    echo "Getting smallest number (x <=> y <=> z): <br>";
    echo "{$total} <br>";

    $total = pi(); // Get pi with decimals
    echo "Getting the pi number (pi with decimals): <br>";
    echo "{$total} <br>";

    $total = rand(); // Get a random number (up to 2 billion)
    echo "Getting a random number: <br>";
    echo "{$total} <br>";

    $total = rand(1, 6); // Get a random number from range of 1 to 6
    echo "Getting a random number from 1 to 6 (dice): <br>";
    echo "{$total} <br>";
    // List of functions
    // abs(), round(), floor(), ceil(), pow(), sqrt(), max(), min(), pi(), rand()
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
 <form action="functions.php" method="post">
  <label for="x">x: </label>
  <input type="text" name="x">

  <label for="y">y: </label>
  <input type="text" name="y">

  <label for="z">z: </label>
  <input type="text" name="z">

  <input type="submit" value="Total">
 </form>
 <br>
 <a href="./index.php">Index</a>
 <a href="./echoing.php">Echoing</a>
 <a href="./variables.php">Variables</a>
 <a href="./arithmetic.php">Arithmetic</a>
 <a href="./restaurant.php">Restaurant</a>
 <a href="./getpost.php">Get & Post</a>
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
</body>
</html>