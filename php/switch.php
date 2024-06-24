<?php
    // switch = replacement to using many elseif statements
    //          more efficient, less code to write

    /**
      * Set the timezone IMPORTANT always set when
      * script uses any date/time function
     **/
    date_default_timezone_set('Asia/Manila');

    $rank = "";

    switch ($rank) {
        case "Private":
            echo "You must be new here <br>";
            break;
        case "Corporal":
            echo "You're still bottom of the barrel <br>";
            break;
        case "Sergeant":
            echo "You've been here longer <br>";
            break;
        case "Lieutenant":
            echo "You think they listen to you <br>";
            break;
        case "Captain":
            echo "You rank high enough to not care <br>";
            break;
        case "Colonel":
            echo "Snake?! Snake!!!! <br>";
            break;
        case "General":
            echo "Step off the grass <br>";
            break;
        default:
            echo "You're a civvie and not of rank Value=\"{$rank}\" <br>";
    }
    $hour = date("g:i A");
    echo "<br> The time is now {$hour} <br>";

    $hour = date("G");
    // echo "The time in twenty-four hour clock is {$hour} <br>";

    // THIS SHOULDN'T BE DONE USE AN IF WHEN COMPARING
    switch (true) {
        case ($hour <= 5 && $hour >= 1):
            echo "It's <p style=\"color: red;\">early morning</p>";
            break;
        case ($hour <= 11 && $hour >= 6):
            echo "It's <p style=\"color: red;\">morning</p>";
            break;
        case ($hour == 12):
            echo "It's <p style=\"color: red;\">midday</p>";
            break;
        case ($hour == 12):
            echo "It's <p style=\"color: red;\">midday</p>";
            break;
        case ($hour <= 17 && $hour >= 13):
            echo "It's <p style=\"color: red;\">afternoon</p>";
            break;
        case ($hour <= 23 && $hour >= 17):
            echo "It's <p style=\"color: red;\">nighttime</p>";
            break;
        case ($hour == 24):
            echo "It's <p style=\"color: red;\">midnight</p>";
            break; 
        default:
            echo "Time has stopped. The world is at end.";
            break;
        // Should have used a span instead of <p>
    }
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
  p {
    display: inline;
  }
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