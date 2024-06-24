<?php
    if (isset($_POST["confirm"])) {
        $gun = null; // So we'll stop getting undefined errors

        // if (!empty($_POST["gun"])) { // DON'T DO THIS use isset()
        if (isset($_POST["gun"])) {
            $gun = $_POST["gun"];
            echo "You have chosen the {$gun} rifle. <br>";
        } // REMINDER TO AVOID NESTED IFS AS MUCH AS POSSIBLE

        // if ($gun == "AK - 74") {
        //     echo "Cheeki Breeki";
        // } elseif ($gun == "M16A2") {
        //     echo "Freedom! Hoo ah!";
        // } elseif ($gun == "FN FNC") {
        //     echo "Waffles are delicious";
        // } elseif ($gun == "Steyr AUG") {
        //     echo "Refined tastes";
        // } else {
        //     echo "Please select a weapon of choice";
        // }

        // A switch if always better with multi selection
        switch ($gun) {
            case "AK - 74":
                echo "Cheeki Breeki";
                break;
            case "M16A2":
                echo "Freedom! Hoo ah!";
                break;
            case "FN FNC":
                echo "Waffles are delicious";
                break;
            case "Steyr AUG":
                echo "Refined tastes";
                break;
            default:
                echo "Please select a weapon of choice.";
        }
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
</style>
<body>
 <form action="radiobuttons.php" method="POST">
  <ul>
   <li> 
    <input type="radio" name="gun" value="AK - 74">
    <label for="ak-74">AK - 74</label>
   </li>

   <li> 
    <input type="radio" name="gun" value="M16A2">
    <label for="m16a2">M16A2</label>
   </li>

   <li> 
    <input type="radio" name="gun" value="FN FNC">
    <label for="fn-fnc">FN FNC</label>
   </li>

   <li> 
    <input type="radio" name="gun" value="Steyr AUG">
    <label for="steyr-aug">Steyr AUG</label>
   </li>
  </ul>
  <!-- Radiobuttons need same names different values -->

  <input type="submit" name="confirm" value="Confirm">
 </form>

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
