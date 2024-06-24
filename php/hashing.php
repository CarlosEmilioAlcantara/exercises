<?php
    // hashing = transforming sensitive data into letters, numbers, and/or
    //           symbols via a mathematical process obscuring its original
    //           data
    //
    // password_hash();
    // password_verify() = checks if a simple text password matches with a 
    //                     hash, useful for securing login credentials

    $password = "ilikegunsuwu";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $password;
    echo $hash;

    if (password_verify("asdfasdf", $hash)) {
        echo "<br> Correct password <br>";
    } else {
        echo "<br> Incorrect password";
    }

    if (password_verify($password, $hash)) {
        echo "<br> Correct password <br>";
    }
?>