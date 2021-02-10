
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
	<title>Category</title>
</head>
<body>
	<div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active mr-3 btn btn-success" href="manage_category.php">Manage Category</a>
                    <a class="nav-item nav-link active mr-3 btn btn-success" href="profile.php">My Profile</a>
                    <a class="nav-item nav-link active mr-4 btn btn-danger" href="contacts.php">Log Out</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="main">
    	<span><h3>Blog Category</h3></span>
    	<hr>
    	<a href="add_category.php" class="btn btn-success">Add Category</a>
        <div id="tableview">

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