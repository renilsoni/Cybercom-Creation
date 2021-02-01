<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $game = $_POST['game'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $file = $_POST['file'];

    echo "Name : ".$name.'<br>'; 
    echo "Password : ".$password.'<br>'; 
    echo "Address : ".$address.'<br>'; 
    echo "Game : "; 
    foreach($game as $gamename) {
        echo $gamename.', ';
    }
    echo "<br>Gender : ".$gender.'<br>'; 
    echo "Age : ".$age.'<br>'; 
    echo "File : ".$file.'<br>'; 
}

?>