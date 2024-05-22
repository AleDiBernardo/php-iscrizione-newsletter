<?php

$user_email = $_GET['email'];
$isEmailValid = false;

// $pattern = '/^[^@]+@[^@]+\.[^@]+$/';


if(isset($_GET['email'])){
    
    if (str_contains($user_email, "@") && str_contains($user_email, ".")  ) {
        $isEmailValid = true;
    }

    // if(preg_match($user_email, $pattern)){
    //     echo "ciao";
    // }
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

        <?php if($isEmailValid): ?>
            <h1 class="alert alert-success">L'email è valida</h1>
        <?php else: ?>
            <h1 class="alert alert-warning">L'email non è valida</h1>
        <?php endif; ?>
    
        <form action="index.php" method="GET" class="m-3">
            <div class="mb-3">
                <label for="email"></label>
                <input type="text" name="email" id="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    
</body>
</html>