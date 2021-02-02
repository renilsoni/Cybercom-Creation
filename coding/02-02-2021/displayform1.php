<?php

include '../../01-02-2021/database.php';
session_start();

if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['game']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['file'])) {
        if (empty($_POST['name']) && empty($_POST['password']) && empty($_POST['address']) && empty($_POST['game']) && empty($_POST['gender']) && empty($_POST['age']) && empty($_POST['file'])) {
            $_SESSION['msg'] = "Please Fill All Details !!";
        } else {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $game = $_POST['game'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $file = $_POST['file'];

            $val = implode(" ",$game);

            $sql = "insert into form1data (name,password,address,game,gender,age,file) VALUES
                    ('".$name."','".$password."','".$address."','".$val."','".$gender."','".$age."','".$file."')";

            if (mysqli_query($conn, $sql)) {
                $_SESSION['msg'] = 'New Record Successfully Inserted';
            } else {
                $_SESSION['msg'] = 'Not Inserted';
            }
        }
    }
    $redirect_url = 'form1.php';
    header('Location:'.$redirect_url);
}

?>