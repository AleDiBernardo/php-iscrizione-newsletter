<?php

if (!isset($_SESSION)) {
    session_start();
}

$user_email = $_SESSION['email'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Benvenuto, la tua email è <?= $user_email?></h1>
</body>
</html>