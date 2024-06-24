<?php
    // $_SERVER = sgb, that contains headers, paths, and script locations
    //            Entries created by web server
    //            Shows nearly everything you need to know about the current
    //            web page env

    // foreach ($_SERVER as $key => $value) {
    //     echo "{$key} => {$value} <br>";
    // }
    // if (isset($_POST["submit"])) {
    //     echo $_POST["username"];
    // }

    // Like above but better
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo $_POST["username"];
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
 <!-- $_SERVER["PHP_SELF"] == the current page useful when you change 
      filnames the filepath in action attribute changes along with it 
      htmlspecialchars() converts output to html preventing cross site
      scripting which PHP_SELF is vulnerable to -->
 <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <label for="username">Username: </label>
  <input type="text" name="username">

  <input type="submit" name="submit" value="Submit">
 </form>
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