<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is: \${$total}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="restaurant.php" method="post">
  <label for="quantity">Quantity: </label><br>
  <input type="text" name="quantity">
  <input type="submit" value="Total">
 </form>
 <br>
 <br>
 <a href="./index.php">Index</a>
 <a href="./echoing.php">Echoing</a>
 <a href="./variables.php">Variables</a>
 <a href="./arithmetic.php">Arithmetic</a>
 <a href="./getpost.php">Get & Post</a>
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