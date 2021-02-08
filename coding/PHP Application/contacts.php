<?php
session_start();

require_once './lib/database.php';

$db = new database\Dbconnect();

if($db->fetchdata('contact')) {
    $data = $db->fetchdata('contact');
} else {
    echo "Error";
}

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
            <a class="navbar-brand" href="index.php">Web App</a>
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
        <div align="center">
            <?php 
                if(isset($_SESSION['successmsg']))
                {
                    if(time() < $_SESSION['time']) {
                        echo "<span class='success'>".$_SESSION['successmsg']."</span>";
                    }
                }
            ?>
        </div>
        <div id="tableview">
            
        </div>
        <div id="pagination">
            
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