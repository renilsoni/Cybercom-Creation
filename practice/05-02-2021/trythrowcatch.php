<?php

$age = 22;

try {

    if ($age > 18) {
        echo 'Old Enough.';
    } else {
        throw new Exception('Not Old Enough.');
    }

} catch (Exception $ex) {
    echo 'Error : '.$ex->getMessage(); 
}

?>
<br><br>
<?php

// $hostname = 'localhost';
// $username = 'renil_sql';
// $password = '';

// $db_name = 'users';

// $conn = mysqli_connect($hostname, $username, $password);

// class ServerException extends Exception {}
// class DatabaseException extends Exception {}

// try {
//     if(!$conn) {
//         throw new ServerException('Could Not Connect To Server.');
//     } else if (!@mysqli_select_db($conn,$db_name)) {
//         throw new DatabaseException('Could Not Connect To Database.');
//     } else {
//         echo 'Connected.';
//     }
// } catch (ServerException $ex) {
//     echo 'Error : '.$ex->getMessage();
// } catch (DatabaseException $ex) {
//     echo 'Error : '.$ex->getMessage();
// }

?>

<br><br>

<?php

// Custom Error Message

$hostname = 'localhost';
$username = 'renil_sql';
$password = '';

$db_name = 'users';

@$conn = mysqli_connect($hostname, $username, $password);

class ServerException extends Exception {
    public function showError() {
        return 'Error in line '.$this->getLine().' in '.$this->getFile();
    }
}

class DatabaseException extends Exception {
    public function showError() {
        return 'Error in line '.$this->getLine().' in '.$this->getFile();
    }
}

try {
    if(!$conn) {
        throw new ServerException();
    } else if (!@mysqli_select_db($conn,$db_name)) {
        throw new DatabaseException();
    } else {
        echo 'Connected.';
    }
} catch (ServerException $ex) {
    echo $ex->showError();
} catch (DatabaseException $ex) {
    echo $ex->showError();
}

?>