<?php 

// session_start();

// if(isset($_SESSION['name'])) {
// 	echo "Welcome ".$_SESSION['name'];
// }

?>  

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
	<title>Blog Post</title>
</head>
<body>
	<div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active mr-3 btn btn-success" href="manage_category.php">Manage Category</a>
                    <a class="nav-item nav-link active mr-3 btn btn-success" href="contacts.php">My Profile</a>
                    <a class="nav-item nav-link active mr-4 btn btn-danger" href="logout.php">Log Out</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="main">
    	<span><h3>Blog Post</h3></span>
    	<hr>
    	<a href="add_blogpost.php" class="btn btn-success">Add Blog Post</a>
    </div>
</body>
</html>