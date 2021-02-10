<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		.error 
		{
			color: red;
		}
        .success
        {
            text-align: center;
            color: red;
            display: block;
            -webkit-animation: cssAnimation 1s forwards;
            animation: cssAnimation 1s forwards;
        }
        @keyframes cssAnimation {
            0% {opacity: 1;}
            90% {opacity: 1;}
            100% {opacity: 0;}
        }
        @-webkit-keyframes cssAnimation {
            0% {opacity: 1;}
            90% {opacity: 1;}
            100% {opacity: 0;}
        }
	</style>
	<title>Login</title>
</head>
<body>
<div class="container mt-4">
<div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Login</div>
                            <div class="card-body">
                                <div align="center">
                                    <?php 
                                        if(isset($_SESSION['loginfail']))
                                        {
                                            if(time() < $_SESSION['time']) {
                                                echo "<span class='success'>".$_SESSION['loginfail']."</span>";
                                            }
                                        }
                                    ?>
                                </div>
                                <form method="POST" action="lib/action.php" onsubmit="return loginValidation()">
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email">
                                            </div>
                                            <span class="error" id='erroremail'></span>
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
                                    <div class="form-group ">
                                        <input type="submit" name="login" id="login" class="btn btn-primary btn-md btn-block" value="Login">
                                    </div>
                                    <div align="center">
                                        <a href="register.php">Create New Account</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>
</body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="./js/validation.js"></script>

</html>