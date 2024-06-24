<?php
    session_start();
    // $THE_camo = $_SESSION["THE_camo"];
    // $bg_img = "{$THE_camo}";

    // cookie = info about user stored in user's browser
    //          used for targeted ads, browsing preferences, and other
    //          "non-sensitive" data
    //          saved as an associative array; expires after time in seconds

    setcookie("fav_gun", "AN-94 Abakan", time() + (86400 * 2), "/");
    setcookie("fav_helmet", "Altyn", time() + (86400 * 3), "/");
    // setcookie("fav_camo", "M81 Woodland", time() + (86400 * 4), "./");
    // time to keep cookie = time now + (seconds in a day * # of days)
    // keyofcookie, valueofcookie, time, where in the website does the cookie
    // apply; "./" means root so everywhere on the site

    // Just checking if the cookies are set
    foreach ($_COOKIE as $key => $value) {
        if ($key == "PHPSESSID") { // Just stops the output of the session id
            ;                      // cookie
        } else {
            echo "{$key} => {$value} <br>";
        }
    }

    // This is the purpose of cookies to save user preferences and history
    // if (isset($_COOKIE["fav_camo"])) {
    //     $bg_img = "./m81-woodland.jpg";
    // }


    if (isset($_POST["submit"])) {
        if (isset($_POST["camo"])) {
            $camo = $_POST["camo"];
            setcookie("camo", "$camo", time() + (86400 * 3), "/");
        } 
        else {
            $camo = "ocp";
        }

        switch ($camo) {
            case "m81-woodland":
                $the_camo = "./m81-woodland.jpg";
                break;
            case "alpenflage":
                $the_camo = "./alpenflage.webp";
                break;
            case "m90-splinter":
                $the_camo = "./m90-splinter.png";
                break;
            case "ocp":
                $the_camo = "./ocp.jpg";
                break;
            default:
                $the_camo = "./ocp.jpg";
                break;
        }

        setcookie("fav_camo", "$the_camo", time() + (86400 * 3), "/");
        // LESSONS:
        // 1. Set the cookies with your conditionals
        // 2. Reset the variables when entering the page
        // 3. Just use the file path as values instead of names

        // header("Refresh:3");
        // if (isset($bg_img)) {
        //     echo("<meta http-equiv='refresh' content='1'>");            
        // }
        // $_SESSION["THE_camo"] = $the_camo;


        // echo("<meta http-equiv='refresh' content='1'>");
        $bg_img = "{$_COOKIE["fav_camo"]}";
        header("Location: cookie.php");
    }
    $bg_img = "{$_COOKIE["fav_camo"]}";

    if (isset($_POST["reset"])) {
        setcookie("fav_camo", "./ocp.jpg", time() + (86400 * 3), "/");
        header("Location: cookie.php");
    }

    // if (empty($camo)) {
    //     $camo = null;
    // } else {
    //     setcookie("camo", "$camo", time() + (86400 * 3), "/");
    // }

    // switch ($camo) {
    //     case "m81-woodland":
    //         $the_camo = "./m81-woodland.jpg";
    //         break;
    //     case "alpenflage":
    //         $the_camo = "./alpenflage.webp";
    //         break;
    //     case "m90-splinter":
    //         $the_camo = "./m90-splinter.png";
    //         break;
    //     case "ocp":
    //         $the_camo = "./ocp.jpg";
    //         break;
    //     default:
    //         $the_camo = "./ocp.jpg";
    //         break;
    // }

    // if (empty($fav_camo)) {
    //     setcookie("fav_camo", "$the_camo", time() + (86400 * 3), "/");
    //     $fav_camo = $_COOKIE["fav_camo"];
    // }

    // $bg_img = "{$fav_camo}";

    // if (isset($_POST["submit"])) {
        // echo("<meta http-equiv='refresh' content='1'>"); 
    // }
    // echo $camo;
    // echo $fav_camo;
    // echo $bg_img;

    //  echo $bg_img; // Just checking

    // Deleting a cookie, unset first then set value to null then time to -1 
    // or time() - 0
    // unset($_COOKIE["fav_lbv"]);
    // setcookie("fav_lbv", '', -1, "/");
    // unset($_COOKIE["fav_sword"]);
    // setcookie("fav_sword", '', -1, "./");
    // unset($_COOKIE["fav_camo"]);
    // setcookie("fav_camo", '', time() - 0, "./");
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<style>
  body {
    color: yellow;
  }

  div {
   /* display: flex;
   flex-direction: column; */
    background-color: #ffffff;
  }

  form {
    margin-top: 5px;
    margin-bottom: 5px;
    background-color: #000000;
    color: red;
  }

  .form-input {
   display: flex;
   background-color: transparent;
  }
</style>
<body style="background-image: url(<?= $bg_img ?>);">
 <form action="cookie.php" method="post">
  <div class="form-input">
   <input type="radio" name="camo" value="m81-woodland">
   <label>M81 Woodland</label>
  </div>

  <div class="form-input">
   <input type="radio" name="camo" value="alpenflage">
   <label>Swiss Alpenflage</label>
  </div>

  <div class="form-input">
   <input type="radio" name="camo" value="m90-splinter">
   <label>M90 Splinter</label>
  </div>
  <!-- Use a <ul> element this is terrible -->

  <input type="submit" name="submit" value="Submit">
  <input type="submit" name="reset" value="Reset">
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
  <a href="./sanitize-validate.php">Sanitize & Validate</a>
  <a href="./include.php">Include</a>
  <a href="./server.php">Server</a>
  <a href="./hashing.php">Hashing</a>
 </div>
</body>
</html>
