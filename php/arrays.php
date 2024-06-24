<?php
    // array = variable that can contains more than one value

    // I like Russian firearms
    $guns = array("VSS Vintorez", "AN-94 Abakan", "AS VAL", "RSh-12");

    echo "Manually echoing items: <br>";
    echo "{$guns[0]} <br>";
    echo "{$guns[1]} <br>";
    echo "{$guns[2]} <br>";
    echo "{$guns[3]} <br>";

    echo "<br> Echoing items using foreach loop: <br>";
    foreach ($guns as $gun) {
        echo $gun . "<br>";
    }

    echo "<br> Adding an item/s to an array: <br>";
    array_push($guns, "OTS-14 Groza", "SVU");
    foreach ($guns as $gun) {
      echo $gun . "<br>";
    }

    echo "<br> Removing an item/s from an array at end: <br>";
    array_pop($guns);
    foreach ($guns as $gun) {
      echo $gun . "<br>";
    }

    echo "<br> Removing an item/s from an array at start: <br>";
    array_shift($guns);
    foreach ($guns as $gun) {
      echo $gun . "<br>";
    }

    echo "<br> Reversing items in array: <br>";
    // $reversed_guns = array_reverse($guns); // array_reverse only gives
                                              // output w/c must be assigned
                                              // to new variable or just
                                              // reassigned to old
    $guns = array_reverse($guns);
    foreach ($guns as $gun) {
      echo $gun . "<br>";
    }

    echo "<br> Counting items in array: <br>";
    echo count($guns);
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<style>
  /* div {
   display: flex;
   flex-direction: column;
  } */
</style>
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