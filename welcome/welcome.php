<?php

require __DIR__ . "/../partials/session.php";

// var_dump($_SESSION);
$password = $_SESSION['password'] ?? '';

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>GENERATED PASSWORD</title>
</head>

<body>
    <div class="container container my-5 py-5">
        <p class="my-5">Ecco qui la tua password generata: <span class="bg-danger text-white py-2 px-4"><?php echo $password; ?></span></p>
        <p class="my-5">La password è lunga <?php echo strlen($password); ?> caratteri come richiesto!</p>
        <form action="../index.php">
            <input type="submit" value="Indietro">
        </form>
    </div>
</body>

</html>