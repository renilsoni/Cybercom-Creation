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

    <div class="contact">
        <h3>Read Contact</h3>
        <hr>
        <a href="create.php"><button class="btn btn-success">Create Contact</button></a>
        <div>
        <table class="table mt-4 table-striped">
            <thead class="table-primary">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Title</th>
                <th>Created</th>
                <th></th>
            </thead>
            <tbody class="table-light">
                <tr>
                    <td>1</td>
                    <td>Renil</td>
                    <td>sonirenil52@gmail.com</td>
                    <td>8200385941</td>
                    <td>Trainee</td>
                    <td>04:16 06-02-2021</td>
                    <td>
                        <a href="update.php" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square"></i></a> 
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-minus-square"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Renil</td>
                    <td>sonirenil52@gmail.com</td>
                    <td>8200385941</td>
                    <td>Trainee</td>
                    <td>04:16 06-02-2021</td>
                    <td>
                        <a href="update.php" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square"></i></a> 
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-minus-square"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Renil</td>
                    <td>sonirenil52@gmail.com</td>
                    <td>8200385941</td>
                    <td>Trainee</td>
                    <td>04:16 06-02-2021</td>
                    <td>
                        <a href="update.php" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square"></i></a> 
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-minus-square"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        
    </div>
</body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>