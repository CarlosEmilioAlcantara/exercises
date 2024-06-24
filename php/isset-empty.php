<?php

    /**
      * Well this doesn't work at all because when the page reloads the items
      * of the associative array are deleted. To really store data a database
      * is always needed.
     */

    echo "NONFUNCTIONAL <br>";

    if (!isset($credentials)) {
        $credentials = array();
    } // Check if array already exists if not create it
      // Originally intended as a way to save data but that doesn't work if
      // each page reload the data is deleted.

    // Register form
    // Click the button so post knows its variables otherwise it will at first
    // not know them and complain about array key being undefined
    if (isset($_POST["username-reg"]) && isset($_POST["password-reg"])) {
        $username_reg = $_POST["username-reg"];
        $password_reg = $_POST["password-reg"];

        // Saving this three lines for later
        // while (empty($username_reg)) {
        //     echo "ey";
        // }

        if (empty($username_reg) || empty($password_reg)) { // Separate these
            echo "Please fill in the username/password input";
        } else {
            $credentials["{$username_reg}"] = "{$password_reg}";
        }
    } 
    
    // Login form
    if (isset($_POST["username-log"]) && isset($_POST["password-log"])) {
        $username_log = $_POST["username-log"];
        $password_log = $_POST["password-log"];

        if (empty($username_log) || empty($password_log)) {
            echo "Please fill in the username/password input";
        } elseif ($credentials[$username_log]) {
            echo "Welcome {$username_log}";
        }
    }

    foreach ($credentials as $key => $value) {
        echo "{$key} = {$value} <br>";
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
     gap: 4px;
   }

   input {
     width: max-content;
   }

   h4 {
     margin-bottom: 0;
   }
</style>
<body>
 <form action="isset-empty.php" method="POST">
  <h4>Register: </h4>
  <label for="username">Username: </label>
  <input type="text" name="username-reg">

  <label for="password">Password: </label>
  <input type="password" name="password-reg">

  <input type="submit">
 </form>

 <form action="isset-empty.php" method="POST">
  <h4>Login: </h4>
  <label for="username-reg">Username: </label>
  <input type="text" name="username-log">

  <label for="password">Password: </label>
  <input type="password" name="password-log">

  <input type="submit">
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