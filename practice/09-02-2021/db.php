<?php 


/**
 * 
 */
class Database
{
	public $hostname = 'localhost';
	public $username = 'renil_sql';
	public $password = '';
	public $dbname = 'users';
	public $db;

	function __construct()
	{
		$this->db = $this->connect();
	}

	public function connect()
	{
		$conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
		if($conn) {
			return $conn;
		} else {
			return mysqli_error($this->db);
		}
	}

	public function insert($table, $data)
	{
		$sql = "INSERT INTO $table (name,email,username,password) VALUES ('".$data['name']."','".$data['email']."','".$data['username']."','".$data['password']."')";
		if (mysqli_query($this->connect(),$sql)) {
			return true;
		} else {
			return mysqli_error($this->db);
		}
	}

	public function login($table, $data) {
		$sql = "SELECT * FROM $table WHERE username = '".$data['username']."' AND password = '".$data['password']."'";
		if ($row = mysqli_query($this->connect(),$sql)) {
			if ($result = mysqli_fetch_assoc($row)) {
				return $result;
			} else {
				return mysqli_error($this->db);
			}
		} else {
			return mysqli_error($this->db);
		}
	}
	
}


 ?>