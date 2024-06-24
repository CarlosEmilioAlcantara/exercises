<?php
    // for = repeat code certain amount of times

    echo "Normal counting: <br>";
    for ($i = 1;$i < 6;$i++) {
        echo "{$i}: Ohio gyatt rizz <br>";
    }

    echo "<br>";

    echo "Normal counting backwards: <br>";
    for ($i = 5;$i > 0;$i--) {
        echo "{$i}: Ohio gyatt rizz <br>";
    }

    echo "<br>";

    echo "Zero-based counting: <br>";
    for ($i = 0;$i < 5;$i++) {
        echo "{$i}: Ohio gyatt rizz <br>";
    }

    echo "<br>";

    echo "Zero-based counting backwards: <br>";
    for ($i = 4;$i > -1;$i--) {
        echo "{$i}: Ohio gyatt rizz <br>";
    }

    echo "<br>";

    echo "Even counting: <br>";
    for ($i = 2;$i < 11;$i+=2) {
        echo "{$i}: Ohio gyatt rizz <br>";
    }

    echo "<br>";

    echo "Even counting backwards: <br>";
    for ($i = 10;$i > 1;$i-=2) {
        echo "{$i}: Ohio gyatt rizz <br>";
    }

    echo "<br>";

    echo "Odd counting: <br>";
    for ($i = 1;$i < 11;$i+=2) {
        echo "{$i}: Ohio gyatt rizz <br>";
    }

    echo "<br>";

    echo "Odd counting backwards: <br>";
    for ($i = 11;$i > 1;$i-=2) {
        echo "{$i}: Ohio gyatt rizz <br>";
    }

    echo "<br>";

    $start = $_POST["start"];
    $end = $_POST["end"];
    $end = $end + 1; // $end++ wasn't working for some reason

    echo "Counting from input: <br>";
    for ($i = $start;$i < $end;$i++) {
        echo "$i <br>";
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
  form {
    display: flex;
    flex-direction: column;
    gap: 2px;
  }

  input {
    max-width: fit-content;
  }
</style>
<body>
  <form action="for.php" method="POST">
   <label for="start">Start at: </label>
   <input type="text" name="start">

   <label for="end">End at: </label>
   <input type="text" name="end">

   <input type="submit" value="Count">
  </form>
 <br>
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