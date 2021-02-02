<?php

include '../../01-02-2021/database.php';

if(isset($_POST['submit'])) {
    if(isset($_POST['email']) && isset($_POST['password'])) {
        if(empty($_POST['email']) && empty($_POST['password'])) {
            echo "Please Fill All Fields !!";
        } else {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "select * from form3data where email = '".$email."' && password = '".$password."'";
            $result = mysqli_query($conn,$sql);
            
            if($result->num_rows > 0) {
                echo "Login Success ";
            } else {
                echo "Wrong Username and Password !!";
            }
        }
    } else {
        echo "Please Fill All Fields !!";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
        }
        .container #login-row #login-column  {
            margin-top: 120px;
            max-width: 600px;
            height: 320px;
        }
        .container #login-row #login-column #login-form {
            padding: 30px;
        }
        .container #login-row #login-column #login-form{
            margin-top: -85px;
        }
        .error
        {
            color : red;
        }
    </style>
</head>

<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">SIGN IN</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email Address:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                                <span id="emailerror"></span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                                <span id="passworderror"></span>
                            </div>
                            <div class="form-group" align="center">
                                <input type="submit" name="submit" class="btn btn-success btn-md mt-2" value="Sign In" onclick='return validateform()'>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="form5.js"></script>
</html>