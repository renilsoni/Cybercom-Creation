<?php 
session_start();

include_once 'db.php';

$db = new Database();

if (isset($_POST['register'])) {
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];

		$data = ['name' => $name, 'email' => $email, 'username' => $username, 'password' => $password];

		if($db->insert('register',$data)) {
			header('Location: login.php');
		} else {
			echo "Register Failed !!";
		}
	}
}

if(isset($_POST['login'])) {
	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$data = ['username' => $username, 'password' => $password];

		$login = $db->login('register',$data);

		if($login['username'] == $username && $login['password'] == $password) {
			$_SESSION['name'] = $login['name'];
			header('Location: success.php');
		} else {
			$_SESSION['time'] = time()+5;
			$_SESSION['loginfail'] = "Wrong Username & Password";
			header('Location: login.php');
		}
	}
}


 ?>