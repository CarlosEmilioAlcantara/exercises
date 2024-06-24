<?php
    // while = while (heh) intended to execute code infinitely 
    //         usually used for executing code a potentially numerous amount
    //         so like run code UNTIL, good for adding a variable amount
    //         of items to an array and other things concerning arrays

    // Using a while loop like a for loop
    // Shouldn't really be done but here's an example
    echo "While loop running code certain amount of time like for loop: <br>";

    $counter = 0;

    while ($counter < 10) {
        echo "{$counter} <br>";
        $counter++;
    }
    /** Note how while can only take one parameter
      * How we had to set the counter variable outside
      * And increment inside the block of code
      * Yeah that's why we use for loop for executing
      * code for a certain amount of time
      */
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
 <br>
 <div class="links">
  <form action="while.php">
    <input type="submit" name="stop" value="stop">
  </form>
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
<?php
    $seconds = 0;
    $running = true; // You can store the truth value in a variable to make
                     // it so that the truth value is changeable
                     // allowing for a sort of on off switch

    echo "<br> While loop with sleep: <br>";

    // PC too potato for this to run like it should
    // while (1) {
    // while (true) { // Sometimes longer code is better so as not to obfuscate
    while ($running) {
        if (isset($_POST["stop"])) {
            $running = false;
        } else {
            echo "{$seconds} <br>";
            // sleep(1); // Wait for 1 second
            $seconds++;
        }
    }
?>