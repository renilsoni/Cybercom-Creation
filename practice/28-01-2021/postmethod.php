<?php

$pwd = 'renil123';

if (isset($_POST['password'])) {
    $password = $_POST['password'];

    if (!empty($password)) {
       if ($password === $pwd) {
           echo 'It is Correct';
       } else {
            echo 'It is Incorrect';
       }
    } else {
        echo 'Please Fill All Fields !!';
    }
}

?>

<form action="" method="POST">
Password : <br>
<input type="password" name="password"><br><br>
<input type="submit" value="Submit">
</form>