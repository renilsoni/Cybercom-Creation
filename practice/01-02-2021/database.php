<?php

$host = 'localhost';
$username = 'renil_sql';
$password = '';
$db_name = 'users';

$error = 'Could Not Connect.';

@mysqli_connect($host, $username, $password) or die($error);

@mysqli_select_db($db_name);

?>