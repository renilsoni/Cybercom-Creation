<?php

require_once 'dbconnect.php';

class Dbconnect {
    private $hostname;
    private $username;
    private $password;
    private $database;

    public function __construct($hostname, $username, $password, $database) {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect()
    {
        $conn = @mysqli_connect($this->hostname, $this->username, $this->password, $this->database);

        if($conn) {
            return $conn;
        } else {
            return false;
        }
    }
}

$conn = new Dbconnect('localhost', 'renil_sql', '','users');
//$conn = new renil\Dbconnect('localhost1', 'renil_sql', '','users'); // using namespace

$db = $conn->connect();

if($db) {   
    echo 'Connect';
} else {
    echo 'Error';
}

?>