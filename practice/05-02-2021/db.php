<?php

class Database {
    public function __construct($hostname, $username, $password) {
        if(!$this->Connect($hostname, $username, $password)) {
            echo "Connection Failed";
        } else if ($this->Connect($hostname, $username, $password)){
            echo "Connect To ".$hostname;
        }
    }

    public function Connect($hostname, $username, $password) {
        
        if (!mysqli_connect($hostname,$username,$password)) {
            return false;
        } else {
            return true;
        }            
    }
}

$connect =  new Database('localhost','renil_sql','');

?>