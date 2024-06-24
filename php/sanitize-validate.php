<?php
    // sanitize - to clean, sanitization in the case of programming is the act
    //            of cleaning input to ensure no malicious code is taken
    //            Removes strings that are invalid

    // validate - to check, check if input is correct, returns an empty string
    //            if fails check

    // SANITIZING/FILTERING
    if(isset($_POST["submit"])) {
        // Enter this code: 
        // <script> alert("UWU you've been hwacked :3") </script>
        // If you don't sanitize your inputs your site might face script
        // injection like above and malicious code might run

        // $username = $_POST["username"];
        $username = filter_input(INPUT_POST, "username",
                                 FILTER_SANITIZE_SPECIAL_CHARS);
        // first argument is whether post or get then variable then what filter
        // With this filter special characters like <> are treated as literals
        echo "{$username} <br>";

        // Filters special characters, removing them and leaving only the
        // normal characters so <asdf>y@fr.nocap becoms asdfy@fr.nocap
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        echo "{$email} <br>";

        // Only gets the numbers from an input
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        if (empty($age)) {
            echo "Please enter only numbers. <br>";
        } else {
            echo "You are {$age} years old.";
        }
    }

    // VALIDATING
    if (isset($_POST["enter"])) {
        if (empty($_POST["age"])) {
            ;
        } else {
            $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

            if (empty($age)) {
                echo "Please enter only integers <br>";
            } else {
                echo "You're age is {$age}. <br>";
            }
        }

        if (empty($_POST["email"])) {
            ;
        } else {
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

            if (empty($email)) {
                echo "Please enter a valid email <br>";
            } else {
                echo "Your email is {$email} <br>";
            }
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
 <form action="sanitize-validate.php" method="post">
  <label for="username">Username: </label>
  <input type="text" name="username">

  <label for="email">Email: </label>
  <input type="text" name="email">

  <label for="age">Age: </label>
  <input type="text" name="age">

  <input type="submit" name="submit" value="Submit">
 </form>

 <form action="sanitize-validate.php" method="post">
  <label for="age">Age: </label>
  <input type="text" name="age">

  <label for="email">Email: </label>
  <input type="text" name="email">

  <input type="submit" name="enter" value="Enter">
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
  <a href="./include.php">Include</a>
  <a href="./cookie.php">Cookie</a>  
  <a href="./server.php">Server</a>
  <a href="./hashing.php">Hashing</a>
 </div>
</body>
</html>
