<?php

require_once __DIR__ . "/partials/functions.php";

$isEmailValid = null;
$error_alert = false;
$input_value = '';

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_GET['email'])) {
    $user_email = $_GET['email'];

    if ($isEmailValid = validator($user_email)) {
        $_SESSION['email'] = $user_email;
        header("Location: thankyou.php");
        die();
    }

    $error_alert = true;
    $input_value = $user_email;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Email Validation</title>
</head>
<body>
    <div class="container mt-5">

        <?php if ($error_alert): ?>
            <h1 class="alert alert-danger">L'email non è valida</h1>
        <?php endif;?>
        <form action="index.php" method="GET" class="m-3">
            <div class="mb-3 d-flex flex-column w-25">
                <label for="email">Inserisci l'email:</label>
                <input type="text" name="email" value="<?= $input_value?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>
</html>