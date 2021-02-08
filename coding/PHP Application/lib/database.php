<?php

namespace database;

class DbConnect{
    private $hostname = 'localhost';
    private $username = 'renil_sql';
    private $password = '';
    private $database = 'users';
    public $db;

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

    public function insert($table, $data) {
        $sql = "INSERT INTO $table (name,email,phone,title,datetime) VALUES ('".$data['name']."','".$data['email']."','".$data['phone']."','".$data['title']."','".$data['datetime']."')";

        if ($result = mysqli_query($this->connect(),$sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function fetchdata($table){
        $sql = "SELECT * FROM $table";

        if ($result = mysqli_query($this->connect(),$sql)) {
            if($rows = mysqli_fetch_all($result,MYSQLI_ASSOC)) {
                return $rows;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function paginationData($table,$page,$limit) {
        $row = $this->fetchdata($table);
        $total_records = count($row);
        $total_page = ceil($total_records / $limit);
        $first_record = ($page - 1)*$limit;

        $sql = "SELECT * FROM $table LIMIT $first_record , $limit";

        if ($result = mysqli_query($this->connect(),$sql)) {
            if($rows = mysqli_fetch_all($result,MYSQLI_ASSOC)) {
                return $rows;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function fetchSingleData($table,$id){
        $sql = "SELECT * FROM $table WHERE id='".$id."'";

        if ($result = mysqli_query($this->connect(),$sql)) {
            if($rows = mysqli_fetch_assoc($result)) {
                return $rows;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function updateSingleRecord($table, $data,$id) {
        $sql = "UPDATE $table SET name = '".$data['name']."', email = '".$data['email']."', phone = '".$data['phone']."', title = '".$data['title']."', datetime = '".$data['datetime']."' WHERE id = '".$id."'";

        if ($result = mysqli_query($this->connect(),$sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteData($table,$id) {
        $sql = "DELETE FROM $table WHERE id = '".$id."'";
        
        if ($result = mysqli_query($this->connect(),$sql)) {
            return true;
        } else {
            return false;
        }
    }
}

// $renil = new Dbconnect();
// echo $renil->insert('as',array('1'));
?>