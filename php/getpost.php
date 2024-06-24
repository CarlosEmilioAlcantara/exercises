<?php
    // $_GET, $_POST = Special varaibles that collect data from an
    //                 HTML form
    //                 Data is sent to file in action attribute of
    //                 <form>
    //                 <form action="file.php" method="get">

    // get/GET = Data appended to url
    //           Understandably NOT SECURE
    //           Data changeable by editing url
    //           Char limit of 8kB/8192 characters
    //           Can bookmark
    //           Can be cached
    //           Better for search page

    // post/POST = Data packaged inside HTTP request
    //             MORE SECURE
    //             No data/char limit
    //             Cannot bookmark
    //             Cannot be cached
    //             Better for submitting credentials (login)

    // Get credentials using GET, NOT SECURE
    if (isset($_GET["username"]) && isset($_GET["password"])) {
        echo "We used GET note the appending to url <br>";
        // echo $_GET["username"] . "<br>";
        echo "{$_GET["username"]} <br>"; // Above but better
        echo "{$_GET["password"]} <br>";
    };

    // Get credentials using POST, SECURE
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        echo "We used POST note no appending to url <br>";
        echo "{$_POST["username"]} <br>";
        echo "{$_POST["password"]} <br>";
    };
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

  p {
   display: inline;
  }
</style>
<body>
 <br>
 <p>Using GET method to get</p>
 <form action="getpost.php" method="get">
  <label for="username">Username:</label>
  <input type="text" name="username">

  <label for="password">Password:</label>
  <input type="password" name="password">

  <input type="submit" value="Log in">
 </form>

 <p>Using POST method to post</p>
 <form action="getpost.php" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username">

  <label for="password">Password:</label>
  <input type="password" name="password">

  <input type="submit" value="Log in">
 </form>
 <br>
 <a href="./index.php">Index</a>
 <a href="./echoing.php">Echoing</a>
 <a href="./variables.php">Variables</a>
 <a href="./arithmetic.php">Arithmetic</a>
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
</body>
</html>