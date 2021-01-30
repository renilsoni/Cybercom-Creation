<?php

if(isset($_POST['password']) && !empty($_POST['password'])) {
    $user_password = md5($_POST['password']);

    $handle = fopen('hash.txt','r');
    $file_password = fread($handle,filesize('hash.txt'));

    if ($user_password == $file_password) {
        echo "Correct Password";
    } else {
        echo "Incorrect Password";
    }
} else {
    echo "Please Enter Password !!";
}

?>

<form action="" method="POST">
    <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>