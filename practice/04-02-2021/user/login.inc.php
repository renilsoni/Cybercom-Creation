<?php

// include 'core.inc.php';
// echo $current_file;

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $password_hash = md5($password);

        $sql = "SELECT id FROM user WHERE username = '".mysqli_real_escape_string($conn,$username)."' && password = '".mysqli_real_escape_string($conn,$password_hash)."'";

        if ($result = mysqli_query($conn,$sql)) {
            $query_rows = mysqli_num_rows($result);
            if ($query_rows == 0) {
                echo "Invalid Username & Password !!";
            } else if ($query_rows == 1) {
                //echo "OK.";
                while($data = mysqli_fetch_assoc($result)) {
                    $user_id = $data['id'];
                }
                $_SESSION['user_id'] = $user_id;
                header('Location: index.php');
            }
        }
    } else {
        echo "Please Enter Username & Password !!";
    }
}

?>

<form action="" method="POST">
    Username : <input type="text" name="username" id="username"> Password : <input type="password" name="password" id="password"> <input type="submit" value="submit" value="Login">
</form>