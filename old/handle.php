<?php

include('./includes/db.php');

$login = $_POST['login'];
$password = $_POST['password'];


$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `name` = '$login' and `password` = '$password'");

// $record  = mysqli_fetch_assoc($count);

if (mysqli_num_rows($count) == 0) {
    echo 'error, you not sign up!';
} else {
    echo 'Hello, ' . $login . '!';
}







?>