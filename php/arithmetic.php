<?php
    // Basic arithmetic operation
    // + - * / ** %

    echo "Basic Arithmetic Operation <br>";
    $x = 4;
    $y = 3;
    $z = null; // A null variable is empty

    $z = $x + $y; // Filling up $z
    echo "{$x} + {$y} = " . $z . "<br>";

    $z = $x - $y;
    echo "{$x} - {$y} = " . $z . "<br>";

    $z = $x * $y;
    echo "{$x} x {$y} = " . $z . "<br>";

    $z = $x / $y;
    echo "{$x} / {$y} = " . $z . "<br>";

    $z = $x ** $y; // Exponent
    echo "{$x}^{$y} = " . $z . "<br>";

    $z = $x % $y; // Modulo, get remainder
    echo "{$x} % {$y} = " . $z . "<br>";

    echo "<br> Increment/Decrement Operation <br>";
    $cntr = 7;

    echo "Original number: {$cntr} <br>";

    $cntr++;
    echo "Incremented number: {$cntr} <br>";

    $cntr+=2;
    echo "Number incremented by 2: {$cntr} <br>";

    $cntr--;
    echo "Decremented number: {$cntr} <br>";

    $cntr-=2;
    echo "Number decremented by 2: {$cntr} <br>";

    // Precedence, if together then same importance 
    // () 
    // ** 
    // * / % 
    // + - 
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
 <a href="./index.php">Index</a>
 <a href="./echoing.php">Echoing</a>
 <a href="./variables.php">Variables</a>
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
</body>
</html>