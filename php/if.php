<?php
    $caliber = 8;

    if ($caliber >= 9) {
        echo "You think the Glock is weak";
    } elseif ($caliber >= 7) {
        echo "You own a TT-33 Tokarev (patrician)";
        // Note how this elseif is below, the order of conditional
        // statements matter if this was above calibers
        // greater than or equal to 9 will be Tokarevs
    } elseif ($caliber == 0) {
        echo "Ammo price inflation has affected you";
    } else {
        echo "You think a .22 is a viable carry gun";
    }

    echo "<br>";

    $ak = false;

    // if ($ak == true) {
    if ($ak) { // Like above but better
        echo "Your name is Sergei and you drink vodka";
    } else {
        echo "Your name is Joe and you drink soda";
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
  <a href="./index.php">Index</a>
  <a href="./echoing.php">Echoing</a>
  <a href="./variables.php">Variables</a>
  <a href="./arithmetic.php">Arithmetic</a>
  <a href="./getpost.php">Get & Post</a>
  <a href="./restaurant.php">Restaurant</a>
  <a href="./functions.php">Functions</a>
  <a href="./circle.php">Circle</a>
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
</body>
</html>