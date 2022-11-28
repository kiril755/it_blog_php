<?php

require_once './config.php';
$db_settings = $config['db'];

$connection = mysqli_connect($db_settings['server'], $db_settings['login'], $db_settings['password'], $db_settings['name']);

if ($connection == false) {
    echo 'bad request';
    echo mysqli_connect_error();
    exit();
}
?>