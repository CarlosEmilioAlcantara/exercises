<?php
    $sheesh = "Gyatt Rizz"; // Variable, note strings can have spaces
    $fr = "fr";
    $oh = "ohio";
    $nc = "no cap 100";

    // Int data type variables
    $age = 21;
    $amnt = 5;

    // Floating point variables
    // $gpa = 1.0; // PHP rounds of if decimal is 0 so float bcms int
    $gpa = 1.5;
    $price = 5.99;

    // Boolean variables, does not echo
    $sotrue = true;
    $itsover = false;

    // Arithmetic with variables
    $totalen = $age * $amnt;
    
    echo $sheesh . "<br>";
    echo "Ong {$fr} <br>";  // echo with variable, {} = placeholder
    echo "{$oh}" . " " . "{$nc} <br>";

    echo "There are {$amnt} users online of age {$age} <br>";
    
    echo "Your gpa is {$gpa} <br>";
    echo "The price is \${$price} <br>"; // $ sign must be escaped

    echo "Das totalen ist! {$totalen}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <br>
 <br>
 <a href="./index.php">Index</a>
 <a href="./echoing.php">Echoing</a>
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
 <a href="./server.php">Server</a>
 <a href="./cookie.php">Cookie</a>  
</body>
</html>