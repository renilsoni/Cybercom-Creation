<?php
session_start();

class phpValidation {
	
	public function __construct(){
		
	}

	public function input($value) {
		$value = trim($value);
		$value = htmlentities($value);
		$value = stripslashes($value);
		return $value;
	}

	public function nameValidation($value) {
		$name = $this->input($value);
		if(empty($name) && !$name) {
			$_SESSION['name_error'] = "Name is Required !!";
		} else {
			if(isset($_SESSION['name_error'])) {
				unset($_SESSION['name_error']);
			}
		}
		return $value;

	}

	public function emailValidation($value) {
		$email = $this->input($value);
		if(empty($email) && !$email) {
			$_SESSION['email_error'] = "Email is Required !!";
		} else {
			if(isset($_SESSION['email_error'])) {
				unset($_SESSION['email_error']);
			}
		}
		return $value;
	}

	public function phoneValidation($value) {
		$phone = $this->input($value);
		if(empty($phone) && !$phone) {
			$_SESSION['phone_error'] = "Phone is Required !!";
		} else {
			if(isset($_SESSION['phone_error'])) {
				unset($_SESSION['phone_error']);
			}
		}
		return $value;
	}

	public function titleValidation($value) {
		$title = $this->input($value);
		if(empty($title) && !$title) {
			$_SESSION['title_error'] = "Title is Required !!";
		} else {
			if(isset($_SESSION['title_error'])) {
				unset($_SESSION['title_error']);
			}
		}
		return $value;
	}

	public function datetimeValidation($value) {
		$datetime = $this->input($value);
		if(empty($datetime) && !$datetime) {
			$_SESSION['datetime_error'] = "Datetime is Required !!";
		} else {
			if(isset($_SESSION['datetime_error'])) {
				unset($_SESSION['datetime_error']);
			}
		}
		return $value;
	}
}

?>