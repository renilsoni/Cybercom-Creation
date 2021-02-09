//Register Validation

function validateRegister() {
	var name = document.getElementById("name").value;
	var email = document.getElementById('email').value;
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var confirm = document.getElementById('confirm').value;

	var flag = true;

	var nameRegx = /^[a-zA-Z ]+$/;
	var emailRegx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var usernameRegx = /^[a-zA-Z0-9]+$/;

	if (name == "") {
		invalid("name",'Name is Required !!');
		flag = false;
	} else if (!nameRegx.test(name)) {
		invalid("name",'Name is Invalid !!');
		flag = false;
	} else {
		valid("name");
	}

	if (email == "") {
		invalid("email",'Email is Required !!');
		flag = false;
	} else if (!emailRegx.test(email)) {
		invalid("email",'Email is Invalid !!');
		flag = false;
	} else {
		valid("email");
	}

	if (username == "") {
		invalid("username",'Username is Required !!');
		flag = false;
	} else if (!usernameRegx.test(username)) {
		invalid("username",'Username is Invalid !!');
		flag = false;
	} else {
		valid("username");
	}

	if (password == "") {
		invalid("password",'Password is Required !!');
		flag = false;
	} else {
		valid("password");
	}

	if (confirm == "") {
		invalid("confirm",'Confirm Password is Required !!');
		flag = false;
	} else {
		valid("confirm");
	}

	if (password != confirm) {
		invalid("confirm",'Password Not Match !!');
		flag = false;
	} else {
		valid("confirm");
	}

	return flag;
}

// Login Validation

function loginValidation() {
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;

	var flag = true;

	if (username == "") {
		invalid("username",'Username is Required !!');
		flag = false;
	} else {
		valid("username");
	}

	if (password == "") {
		invalid("password",'Password is Required !!');
		flag = false;
	} else {
		valid("password");
	}
	return flag;
}


function valid(id) {
	document.getElementById('error'+id).style.display = "none";
}

function invalid(id,msg) {
	document.getElementById('error'+id).style.display = "block";
	document.getElementById('error'+ id).textContent = msg;
}
