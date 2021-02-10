<?php
session_start();

include_once 'lib/db.inc.php';
$db = new Database();

$data = $db->parent_category('category');

?>

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
    	<span><h3>Add Category</h3></span>
    	<hr>
        <div>
            <form action="lib/action.php" method="POST" onsubmit="return categoryValidation();">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title"> Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" />
                        <span class="error" id="errortitle"></span>
                    </div>
                    <div class="form-group">
                        <label for="content"> Content</label>
                        <input type="text" class="form-control" name="content" id="content" placeholder="Enter Content"/>
                        <span class="error" id="errorcontent"></span>
                    </div>
                    <div class="form-group">
                        <label for="url"> URL</label>
                        <input type="text" class="form-control" name="url" id="url" placeholder="Enter URL"/>
                        <span class="error" id="errorurl"></span>
                    </div>
                    <div class="form-group">
                        <label for="metatitle"> Meta Title</label>
                        <input type="text" class="form-control" name="metatitle" id="metatitle" placeholder="Enter Meta Title"/>
                        <span class="error" id="errormetatitle"></span>
                    </div>
                    <div class="form-group">
                        <label for="parent"> Parent Category</label>
                        <select class="form-control" name="parent_category" id="parent_category">
                            <option value="0"></option>
                            <?php foreach ($data as $value): ?>
                                <option value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <span class="error" id="errorparent_category"></span>
                    </div>
                    <div class="form-group">
                        <label for="image"> Image</label>
                        <input type="file" class="form-control" name="image" id="image" />
                        <span class="error" id="errorimage"></span>
                    </div>
                </div>
                <input class="btn btn-success" type="submit" id="addcategory" name="addcategory" value="Add Category">
            </form>
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