<?php

$hostname = 'localhost';
$username = "renil_sql";
$password = '';
$db_name = 'users';

$error = "Could Not Connect";

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if (!$conn) {
    die($error);
}

?>