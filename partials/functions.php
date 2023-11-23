<?php 

$password_length = $_GET['password_length'];

function randomPassword($password_length) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@!"£$%&=?^*+#°§-_';
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
}

// var_dump(randomPassword($password_length));
$password = randomPassword($password_length);
?>