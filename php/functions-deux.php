<?php
    /**
     * There's something we can do! All inputs are strings so we convert
     * (int) $input, (float) $input but first we need to see if string
     * contains number or . w/ number to see if int or float, some other
     * time
     */

    $input = 2.5;

    if (is_float($input)) {
        echo "Float";
    }

    echo "<br>";

    $num = $_POST["input"];
    echo "{$num} / 2"; // See how we get a text instead

    // if (isset($_POST["input"])) {
    //     $input = $_POST["input"];
    //     // $type = gettype($_POST["input"]);
    // }

    // switch ($input) {
    //     // case is_numeric($input):
    //     //     $type = "Numeric";
    //     //     break;
    //     case is_float($input):
    //         $type = "Float";
    //         break;
    //     case is_int($input): // Doesn't work with is_numeric() as all inputs
    //         $type = "Integer"; // are strings
    //         break;
    //     case is_string($input):
    //         $type = "String";
    //         break;
        
    // }

    // function itIs($input, $type) {
    //     echo "{$input} is of type {$type}";
    // }

    // itIs($input, $type);
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
 <form action="functions-deux.php" method="POST">
  <label for="input">Input: </label>
  <input type="text" name="input">

  <input type="submit" name="submit" value="Submit">
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
  <a href="./string-functions.php">String Functions</a>
  <a href="./sanitize-validate.php">Sanitize & Validate</a>
  <a href="./include.php">Include</a>
  <a href="./cookie.php">Cookie</a>  
  <a href="./server.php">Server</a>
  <a href="./hashing.php">Hashing</a>
 </div>
</body>
</html>
