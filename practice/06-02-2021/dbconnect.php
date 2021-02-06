<?php

namespace renil;

class DbConnect{
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

?>