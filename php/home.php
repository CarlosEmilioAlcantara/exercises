<?php
    session_start();
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];

    if (isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>Welcome!</h1>
 <p>User: <?= $username ?></p>
 <p>Password: <?= $password ?></p>
 <form action="home.php" method="post">
  <input type="submit" name="logout" value="Logout">
 </form>
</body>
</html>