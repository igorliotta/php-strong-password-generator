<?php

require __DIR__ . "/partials/session.php";
include __DIR__ . "/partials/functions.php";

$password = $_SESSION['password'] ?? '';


if (isset($_GET['password_length'])) {
    $password_length = $_GET['password_length'];
    $password = randomPassword($password_length);

    if ($password) {
        $_SESSION['password'] = $password;
        header('Location: http://localhost:8888/php-strong-password-generator/welcome/welcome.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container-lg my-5 py-5">
        <h1 class="p-3 mb-2 bg-primary text-white text-center">GENERATORE DI PASSWORD (SICURE)</h1>
        <form action="" method="get" class="p-3 mb-2 bg-warning text-white text-center">
            <input type="number" name="password_length" placeholder="Inserisci la lunghezza della password">
            <input type="submit" value="Genera">
        </form>
    </div>
</body>

</html>