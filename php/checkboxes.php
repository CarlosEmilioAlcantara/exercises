<?php
    if (empty($arsenal)) {
        $arsenal = array();
    }

    // We need to check in this case if button is pressed bc of multiple
    // names
    if (isset($_POST["chose-calibers"])) { 
        foreach ($_POST as $key => $value) {
            $arsenal["{$key}"] = "{$value}"; 
            // We need the double quotes to make values into acceptable strings
        }

        array_pop($arsenal); // To get rid of the select item
        echo "You're guns are in these calibers: <br> ";

        foreach ($arsenal as $key => $value) {
            echo "{$key} = {$value} <br>";
        }
    }

    if (isset($_POST["chose-optics"])) {
        $optics = $_POST["optics"];

        echo "Side mounted optics are sweet: <br>";

        foreach ($optics as $optic) {
            echo "{$optic} <br>";
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
  ul {
    list-style: none;
    padding-inline-start: 0px;
  }
</style>
<body>
 <form action="checkboxes.php" method="POST">
  <ul>
   <li>
    <input type="checkbox" name="AK - 74" value="5.45x39mm">
    <label for="AK - 74">AK - 74</label>
   </li>

   <li>
    <input type="checkbox" name="M16A2" value="5.56x45mm">
    <label for="M16A2">M16A2</label>
   </li>

   <li>
    <input type="checkbox" name="AKMS" value="7.62x39mm">
    <label for="AKMS">AKMS</label>
   </li>

   <li>
    <input type="checkbox" name="M14" value="7.62x51mm">
    <label for="M14">M14</label>
   </li>
  </ul>
  <!-- Checkboxes require different names and values, the names become
       keys. -->
  
  <input type="submit" name="chose-calibers" value="Select">
 </form>

 <form action="checkboxes.php" method="POST">
  <ul>
   <li>
    <input type="checkbox" name="optics[]" value="PSO-1">
    <label for="">PSO-1</label>
   </li>

   <li>
    <input type="checkbox" name="optics[]" value="Rakurs">
    <label for="">Rakurs</label>
   </li>

   <li>
    <input type="checkbox" name="optics[]" value="1P87">
    <label for="AKMS">AKMS</label>
   </li>

   <li>
    <input type="checkbox" name="optics[]" value="Kobra">
    <label for="">Kobra</label>
   </li>
  </ul>
  <!-- Checkboxes can fill the value of an array by having the same name 
       plus "[]"; array[] -->
  
  <input type="submit" name="chose-optics" value="Select">
  <!-- Never use the same name for one input and an array PHP will
       be confused -->
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
