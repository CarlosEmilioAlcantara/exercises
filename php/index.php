<?php
    session_start();
    var_dump($_COOKIE);
    // session = super global variable used to store info about user across
    //           multiple pages, commonly used for login credentials

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username) && empty($password)) {
            echo "Please enter login credentials <br>";
        } else if (empty($username)) {
            echo "Please enter a username <br>";
        } else if (empty($password)) {
            echo "Please enter a password <br>";
        } else {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
        }

        if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
            header("Location: home.php");
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
  div {
   display: flex;
   flex-direction: column;
  }

  ul {
    list-style: none;
    padding-left: 0px;
  }

  li {
    margin-top: 2px;
  }
</style>
<body>
 <form action="index.php" method="post">
  <ul>
   <li>
    <label for="username">Username: </label>
    <input type="text" name="username">
   </li>

   <li>
    <label for="password">Password: </label>
    <input type="password" name="password">
   </li>
  </ul>

  <input type="submit" name="login" value="Login">
 </form>
 <br>
 <div class="links">
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
