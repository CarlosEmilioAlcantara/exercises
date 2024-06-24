<?php
    // associative array = An array made up of key & value pairs
    //                     key=>value

    $makers = array("Beretta"=>"M9",
                   "Colt"=>"M4",
                   "Ruger"=>"Mini 14",
                   "Heckler & Koch"=>"G3",
                   "Fabrique Nationale"=>"FAL");

    echo "When echoing one by one only the value can be outputted: <br>";
    echo "{$makers["Beretta"]} <br>";
    echo "{$makers["Colt"]} <br>";
    echo "{$makers["Ruger"]} <br>";
    echo "{$makers["Heckler & Koch"]} <br>";
    echo "{$makers["Fabrique Nationale"]} <br>";
    // As you can see each item is accesed using its key

    echo "<br> Echoing key and value of an associative array: <br>";
    foreach($makers as $key => $value) {
      echo "{$key} => {$value} <br>";
    }

    echo "<br> To output the key of an associative array by itself, the 
          associative array must first be turned into a non-associative
          one. <br>";

    echo "<br> Turning an associative array to a non-associative one and
          printing out the keys. <br>";

    $item = array_slice($makers, 0, 1);
    echo key($item) /*. " => " . current($item) */. "<br>";

    $item = array_slice($makers, 1, 1);
    echo key($item) /*. " => " . current($item) */. "<br>";

    $item = array_slice($makers, 2, 1);
    echo key($item) /*. " => " . current($item) */. "<br>";

    $item = array_slice($makers, 3, 1);
    echo key($item) /*. " => " . current($item) */. "<br>";

    $item = array_slice($makers, 4, 1);
    echo key($item) /*. " => " . current($item) */. "<br>";
    // Unless you need to get a specific this should not really be done
    // current($item) gets the now spliced value

    echo "<br> Extracting the keys and printing them out with a foreach loop
          <br>";
    $keys = array_keys($makers);
    foreach ($keys as $key) {
        echo "{$key} <br>";
    }   // This however does not allow you to extract a specific key

        // foreach ($makers as $keys => $values) {
        //     echo "{$keys} <br>";
        // }
        // Another way of doing the above NOT CLEAN


    echo "<br> Extracting the values and printing them out with a foreach loop
          <br>";
    $values = array_values($makers);
    foreach ($values as $value) {
        echo "{$value} <br>";
    } 
        // foreach ($makers as $keys => $values) {
        //     echo "{$values} <br>";
        // }
        // Unclean method for above

    echo "<br> Printing out the now separated array <br>";
    for ($i = 0; $i < sizeof($keys); $i++) {
      echo "{$keys[$i]} => {$values[$i]} <br>";
    }   // This should also NEVER BE DONE

    echo "<br> Changing the value of a key: <br>";
    $makers["Beretta"] = "92FS";
    $item = array_slice($makers, 0, 1);

    echo key($item) . " => " . current($item) . "<br>";

    echo "<br> Adding a new key and value pair: <br>";
    $makers["SIG"] = "SG 550";
    $item = array_slice($makers, 5, 1);
    
    echo key($item) . " => " . current($item) . "<br>";

    echo "<br> Delete from associative array at end: <br>";
    array_pop($makers); // same command used for normal arrays
    foreach($makers as $key => $value) {
      echo "{$key} => {$value} <br>";
    } // If worked SIG => SG 550 should be gone

    echo "<br> Delete from associative array at start: <br>";
    array_shift($makers); // same command used for normal arrays
    foreach($makers as $key => $value) {
      echo "{$key} => {$value} <br>";
    } // If worked Beretta => 92FS should be gone

    echo "<br> Flipping the keys and values: <br>";
    $guns = array_flip($makers);
    foreach ($guns as $keys => $values) {
        echo "{$keys} <= {$values} <br>";
    }

    // If you want to use the same array
    // $makers = array_flip($makers);
    // foreach ($makers as $keys => $values) {
    //     echo "{$keys} => {$values} <br>";
    // }

    echo "<br> Reversing the array: <br>";
    $reversed_makers = array_reverse($makers);
    foreach ($reversed_makers as $keys => $values) {
        echo "{$keys} => {$values} <br>";
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
 <br>
 <!-- Get gun or make form -->
 <?php
    $gun = null;
    $maker = null;

    if (!isset($_POST["gun"])) {
        ;
    } else {
        $gun = $_POST["gun"];
        $maker = $guns[$gun];
    }

    if (!isset($_POST["maker"])) {
        ;
    } else {
        $maker = $_POST["maker"];
        $gun = $makers[$maker];
    }
 ?>
 <form action="associative-arrays.php" method="POST">
  <label for="gun">Gun: </label>
  <input type="text" name="gun" id="gun" value="<?= $gun; ?>">

  <label for="maker">Maker: </label>
  <input type="text" name="maker" id="maker" value="<?= $maker; ?>">

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
<script>
    // Script for disabling one input if the other is already filled
    var gun = document.getElementById("gun"); // No # needed for id name
    var maker = document.getElementById("maker");

    gun.onchange = function() {
        if (this.value != '' || this.value.length > 0) {
            maker.disabled = true;
        }
    }

    maker.onchange = function() {
        if (this.value != '' || this.value.length > 0) {
            gun.disabled = true;
        }
    }
</script>
