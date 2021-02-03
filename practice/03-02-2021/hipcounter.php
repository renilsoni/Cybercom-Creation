<?php

require 'database.php';

$user_ip = $_SERVER['REMOTE_ADDR'];
//echo $user_ip;

// $user_ip = '127.1.1.127';

function ip_exists($ip) {
    global $user_ip,$conn;
    $query = "SELECT `ip` FROM `hits_ip` WHERE `ip` = '".$ip."'";
    $query_run = mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run) == 0) {
        return false;
    } else if (mysqli_num_rows($query_run) >= 1) {
        return true;
    }
}

function ip_add($ip) {
    global $conn;
    $query = "INSERT INTO `hits_ip` VALUES ('".$ip."')";
    @$query_run = mysqli_query($conn,$query);
}

function update_count() {
    global $conn;
    $query = "SELECT `count` FROM `hits_count`";
    if($run = mysqli_query($conn,$query)) {
       while($row = mysqli_fetch_assoc($run)) {
           $count = $row['count'];
       }
       //echo $count;
       $count_inc = $count + 1;

       $query_update = "UPDATE `hits_count` SET `count` = '".$count_inc."'"; 
       if($run_update = mysqli_query($conn,$query_update)) {
           echo 'OK';
       }
    } else {
        echo mysqli_error($conn);
    }
}

if(!ip_exists($user_ip)) {
    update_count();
    ip_add($user_ip);
}



?>