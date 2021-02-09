<?php 

// include_once 'db.php';
// $db = new Database();

// if($db) {
// 	echo "Ok";
// } else {
// 	echo "Error";
// }

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		.error 
		{
			color: red;
		}
	</style>
	<title>Register</title>
</head>
<body>
<div class="container mt-4">
<div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Register</div>
                            <div class="card-body">

                                <form method="POST" action="action.php" onsubmit="return validateRegister()">

                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Your Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name">
                                            </div>
                                            <span class="error" id='errorname'></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email">                        
                                            </div>
                                            <span class="error" id='erroremail'></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Username</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username">
                                            </div>
                                            <span class="error" id='errorusername'></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label">Password</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password">
                                            </div>
                                            <span class="error" id='errorpassword'></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password">
                                            </div>
                                            <span class="error" id='errorconfirm'></span>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <input type="submit" name="register" id="register" class="btn btn-primary btn-md btn-block" value="Register">
                                    </div>
                                    <div class="login-register" align="center">
                                        <span>Have You Acoount Already ?? </span><a href="login.php">Login</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>
</body>

<script type="text/javascript" src="script.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>