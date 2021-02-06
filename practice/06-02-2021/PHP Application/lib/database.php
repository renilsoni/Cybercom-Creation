<?php

class DbConnect{
    private $hostname;
    private $username;
    private $password;
    private $database;

    public function __construct() {
        $this->db = $this->connect();
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

    // public function insert($table, $data) {
    //     $sql = "INSERT INTO contact (name,email,phone,title,datetime)"
    // }
}

?>