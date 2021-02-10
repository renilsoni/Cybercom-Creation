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

                                <form method="POST" action="lib/action.php" onsubmit="return validateRegister()">
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Prefix</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <select class="form-control" name="prefix" id="prefix">
                                                    <option value="" selected disabled>Select :</option>
                                                    <option value="mr">Mr.</option>
                                                    <option value="mrs">Mrs.</option>
                                                    <option value="miss">Miss.</option>
                                                </select>
                                            </div>
                                            <span class="error" id='errorprefix'></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">FirstName</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter Your FirstName">
                                            </div>
                                            <span class="error" id='errorfirstname'></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">LastName</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Your Lastname">
                                            </div>
                                            <span class="error" id='errorlastname'></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email">                        
                                            </div>
                                            <span class="error" id='erroremail'></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Mobile No</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Your Mobile No">
                                            </div>
                                            <span class="error" id='errormobile'></span>
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
                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">Information</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <textarea class="form-control" name="information" id="information" placeholder="Enter Your Information"></textarea>
                                            </div>
                                            <span class="error" id='errorinformation'></span>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <input type="submit" name="register" id="register" class="btn btn-primary btn-md btn-block" value="Register">
                                    </div>
                                    <div class="login-register" align="center">
                                        <span>Have You Acoount Already ?? </span><a href="index.php">Login</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>
</body>

<script type="text/javascript" src="./js/validation.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>