<?php 

include __DIR__ . "/partials/functions.php";

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
    <div class="container my-5 py-5">
        <form action="" method="get">
            <input type="number" name="password_length">
            <input type="submit" value="Genera">
        </form>

        <p class="my-5">La tua Password generata è: <span class="bg-danger text-white py-2 px-4"><?php echo $password; ?></span></p>
    </div>
</body>
</html>