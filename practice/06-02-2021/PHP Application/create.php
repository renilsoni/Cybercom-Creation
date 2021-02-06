<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Web App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active mr-3" href="index.php"><i class="fa fa-home fa-lg"></i> Home</a>
                    <a class="nav-item nav-link active mr-4" href="contacts.php"><i class="fa fa-address-card-o"></i> Contact</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="main">
        <h3>Create Conatct</h3>
        <hr>

        <div>
            <form action="" method="POST" onsubmit="return Validation();">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"> Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" />
                            <span class="error" id="name-info"></span>
                        </div>
                        <div class="form-group">
                            <label for="email"> Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email"/>
                            <span class="error" id="email-info"></span>
                        </div>
                        <div class="form-group">
                            <label for="datetime"> Created</label>
                            <input type="datetime-local" class="form-control" name="datetime" id="datetime" />
                            <span class="error" id="datetime-info"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone"> Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone"/>
                            <span class="error" id="phone-info"></span>
                        </div>
                        <div class="form-group">
                            <label for="title"> Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title"/>
                            <span class="error" id="title-info"></span>
                        </div>
                    </div>
                </div>
                <input class="btn btn-success" type="submit" id="create" name="create" value="Create">
            </form>
        </div>

</body>

<script src="./js/validation.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>