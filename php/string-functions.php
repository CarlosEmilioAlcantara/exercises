<?php
    $place = "London";
    $number = "581";
    $why = " H e l l o  W o r l dO";

    echo "Turn string into all lowercase: <br>";
    $place = strtolower($place);
    echo "{$place} <br>";

    echo "<br> Turn string into all uppercase: <br>";
    $place = strtoupper($place);
    echo "{$place} <br>";

    echo "<br> Delete character from string start and 
          end(whitespace by default): <br>";
    $why = trim($why);
    $why = trim($why, "O");
    echo "{$why} <br>";
    // Default behavior is to delete whitespaces from start and end
    // but when given characters delete that character
    // rtrim() => trim from end version

    echo "<br> Pad string with character/s x amount of times <br>";
    $place = str_pad($place, 7, "&"); // int must be currength length + 
    echo "{$place} <br>";             // desired length can only be one char

    echo "<br> Pad string at left: <br>";
    $place = str_pad($place, 8, "&", STR_PAD_LEFT,);  
    echo "{$place} <br>";
    
    echo "<br> Pad string at start and end: <br>";
    $place = str_pad($place, 10, "&", STR_PAD_BOTH,);  
    echo "{$place} <br>";

    echo "<br> Replace x character with y: <br>";
    $why = str_replace(" ", "$", $why, $count);
    echo "Found {$count} characters replacing >> {$why} <br>";

    echo "<br> Reverse a string: <br>";
    $number = strrev($number);
    echo "{$number} <br>";

    echo "<br> Randomly shuffle characters in a string: <br>";
    $why = str_shuffle($why); // Changes with every page reload save in a 
    echo $why . "<br>";                // database perhaps?

    $a = "a";
    $b = "a";
    echo "<br> Returns 0 if strings are the same: <br>";
    $cmp = strcmp($a, $b);
    echo $cmp . "<br>";
    // echo "{strcmp($a, $b)} <br>"; // It's impossible to mix dynamic 
                                     // (functions) and static (strings)
                                     //  code inside echo

    $a = "a";
    $b = "b";
    echo "<br> Returns -1 if 1st string comes before alphabetically: <br>";
    $cmp = strcmp($a, $b);
    echo $cmp . "<br>";
    
    $a = "c";
    $b = "b";
    echo "<br> Returns 1 if 1st string comes after alphabetically: <br>";
    $cmp = strcmp($a, $b);
    echo $cmp . "<br>";

    // When we say aplhabetically we don't mean the English alphabet byt
    // the ASCII alphabet where each character has a number attached to it
    // a = 65 < b = 66 < c = 67, strcmp() used to count exactly the amount
    // a string was before or after alphabetically but this changed

    echo "<br> Counts the length of a string: <br>";
    $count = strlen($place);
    echo "{$count} <br>";

    echo "<br> Finds 1st occurence of character in string: <br>";
    $count = strpos($place, "&");
    echo "{$count} <br>";

    echo "<br> Find 1st occurence of character in string after #: <br>";
    $count = strpos($place, "&", 2);
    echo "{$count} <br>";

    echo "<br> Extract starting at position x in string: <br>";
    $place = "London, England";
    $country = substr($place, 6);
    
    echo $country . "<br>";

    echo "<br> Extract at position x upto y in string: <br>";
    $place = "London, England";
    $city = substr($place, 0, 6);
    
    echo $city . "<br>";

    echo "<br> Turn string with limit x into array: <br>";
    $places = explode(",", $place);

    foreach ($places as $location) {
        echo "{$location} <br>";
    }

    echo "<br> Turn array into a single string: <br>";
    $birmingham = implode($places);
    echo "{$birmingham} <br>";
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
