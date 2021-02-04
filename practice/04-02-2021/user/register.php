<?php

include 'core.inc.php';
include 'dbconnect.inc.php';

if (!loggedin()) {

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repeatpassword']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    if (strlen($username) > 30 || strlen($password) > 35 || strlen($repeatpassword) > 35 || strlen($firstname) > 30 || strlen($lastname) > 30 ) {
       echo "Please ahead to max length of fields."; 
    } else {
        if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['repeatpassword']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])) {
            if ($password != $repeatpassword) {
                echo 'Password do not match !!';
            } else {
                $check_uname = "SELECT username FROM user WHERE username = '".$username."'";
                $result = mysqli_query($conn,$check_uname);
                if(mysqli_num_rows($result) == 1) {
                    echo "Username ".$username." Already Exists.";
                } else {
                    $sql = "INSERT INTO user(username,password,firstname,lastname) VALUES ('".mysqli_real_escape_string($conn,$username)."','".mysqli_real_escape_string($conn,md5($password))."','".mysqli_real_escape_string($conn,$firstname)."','".mysqli_real_escape_string($conn,$lastname)."')";
                    if ($result = mysqli_query($conn,$sql)) {
                        header('Location: register_success.php');
                    } else {
                        echo 'Sorry, We could not register you at this time. Try again !!';
                    }
                }
            }
        } else {
            echo 'All Fields Are Required !!';
        }
    }
}

?>

<form action="" method="POST">
    Username : <input type="text" name="username" id="username" maxlength="30"> <br><br>
    Password : <input type="password" name="password" id="password" maxlength="35"> <br><br>
    Repeat Password : <input type="password" name="repeatpassword" id="repeatpassword" maxlength="35"> <br><br>
    Firstname : <input type="text" name="firstname" id="firstname" maxlength="30"> <br><br>
    Lastname : <input type="text" name="lastname" id="lastname" maxlength="30"> <br><br>
    <input type="submit" name="register" value="Register">
</form>

<?php 
} else if (loggedin()) {
    echo 'You Are Already Register & Login !!';
}

?>