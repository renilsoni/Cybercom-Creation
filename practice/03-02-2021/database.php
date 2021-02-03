<?php
$host = 'localhost';
$username = 'renil_sql';
$password = '';
$db_name = 'users';

$error = 'Could Not Connect.';

$conn = mysqli_connect($host, $username, $password);

if (!$conn) {
    die($error);
} else {  
    if(!@mysqli_select_db($conn,$db_name)) {
        die($error);
    }
}


?>