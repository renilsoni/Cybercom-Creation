<?php
session_start();

require_once './lib/database.php';
$db = new database\Dbconnect();

if(isset($_GET['id'])) {
    $uid = $_GET['id'];
    if($row = $db->fetchSingleData('contact',$uid)) {
        $data = $row;
        $time = $data['datetime'];
        $datetime = date('Y-m-d\TH:i:s', strtotime($time));
    } else {
        echo 'Error';
    }
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
        <h3>Update Contact</h3>
        <hr>
    <div>
        <form action="lib/action.php" method="POST" onsubmit="return Validation();">
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" name="id" id="id" value='<?= isset($_SESSION['id']) ? $_SESSION['id'] : $data['id'] ?>' >
                        <div class="form-group">
                            <label for="name"> Name</label>
                            <input type="text" name="name" id="name" class="form-control" value=<?= isset($_SESSION['data']) ? $_SESSION['data']['name'] : $data['name'] ?>>
                            <span class="error" id="name-info">
                                <?php if(isset($_SESSION['name_error'])) {
                                    echo $_SESSION['name_error'];
                                } ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="email"> Email</label>
                            <input type="text" class="form-control" name="email" id="email" value=<?= isset($_SESSION['data']) ? $_SESSION['data']['email'] : $data['email'] ?>>
                            <span class="error" id="email-info">
                                <?php if(isset($_SESSION['email_error'])) {
                                    echo $_SESSION['email_error'];
                                } ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="datetime"> Created</label>
                            <input type="datetime-local" class="form-control" name="datetime" id="datetime" value=<?= isset($_SESSION['data']) ? $_SESSION['data']['datetime'] : $datetime ?>>
                            <span class="error" id="datetime-info">
                                <?php if(isset($_SESSION['datetime_error'])) {
                                    echo $_SESSION['datetime_error'];
                                } ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone"> Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" value=<?= isset($_SESSION['data']) ? $_SESSION['data']['phone'] : $data['phone'] ?>>
                            <span class="error" id="phone-info">
                                <?php if(isset($_SESSION['phone_error'])) {
                                    echo $_SESSION['phone_error'];
                                } ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="title"> Title</label>
                            <input type="text" name="title" id="title" class="form-control" value=<?= isset($_SESSION['data']) ? $_SESSION['data']['title'] : $data['title'] ?>>
                            <span class="error" id="title-info">
                                <?php if(isset($_SESSION['title_error'])) {
                                    echo $_SESSION['title_error'];
                                } ?>
                            </span>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-success"  id="update" name="update" value="Update">
            </form>
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