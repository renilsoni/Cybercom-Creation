<?php

include 'dbconnect.inc.php';

ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
    $http_ref = $_SERVER['HTTP_REFERER'];
}

function loggedin() {
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}

function getfields($field) {
    global $conn;
    $sql = "SELECT * FROM user WHERE id = '".$_SESSION['user_id']."'";
    if($row = mysqli_query($conn,$sql)) {
        while($result = mysqli_fetch_assoc($row)) {
            return $result[$field];
        }
    }
}

?>