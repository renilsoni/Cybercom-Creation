$(document).ready(function(){ 

	loaddata();

	function loaddata() {
        $.ajax({
            url : 'lib/action.php',
            method : 'POST',
            data : {load:'load'},
            success : function(data)
            {
                $('#tableview').html(data);
            }
        });
    }

    $(document).on('click','.delete',function()
    {
        var id = $(this).attr('id');

        $.ajax({
            url : 'lib/action.php',
            method : 'POST',
            data : {delete:'delete', id:id},
            success : function(data)
            {
                if(data) {
                    loaddata();
                }
            }
        });
    });


});


//Register Validation

function validateRegister() {
	var prefix = document.getElementById("prefix").value;
	var firstname = document.getElementById("firstname").value;
	var lastname = document.getElementById("lastname").value;
	var email = document.getElementById('email').value;
	var mobile = document.getElementById('mobile').value;
	var password = document.getElementById('password').value;
	var confirm = document.getElementById('confirm').value;
	var information = document.getElementById("information").value;

	var flag = true;

	var nameRegx = /^[a-zA-Z ]+$/;
	var emailRegx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var mobileRegx = /^[6-9]\d{9}$/;

	if (prefix == "") {
		invalid("prefix",'Prefix is Required !!');
		flag = false;
	} else {
		valid("prefix");
	}

	if (firstname == "") {
		invalid("firstname",'FirstName is Required !!');
		flag = false;
	} else if (!nameRegx.test(firstname)) {
		invalid("firstname",'FirstName is Invalid !!');
		flag = false;
	} else {
		valid("firstname");
	}

	if (lastname == "") {
		invalid("lastname",'LastName is Required !!');
		flag = false;
	} else if (!nameRegx.test(lastname)) {
		invalid("lastname",'LastName is Invalid !!');
		flag = false;
	} else {
		valid("lastname");
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

	if (mobile == "") {
		invalid("mobile",'Mobile No is Required !!');
		flag = false;
	} else if (!mobileRegx.test(mobile)) {
		invalid("mobile",'Mobile No is Invalid !!');
		flag = false;
	} else {
		valid("mobile");
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
	} else if (password != confirm) {
		invalid("confirm",'Password Not Match !!');
		flag = false;
	} else {
		valid("confirm");
	}

	if (information == "") {
		invalid("information",'Information is Required !!');
		flag = false;
	} else {
		valid("information");
	}

	return flag;
}

// Login Validation

function loginValidation() {
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;

	var flag = true;

	if (email == "") {
		invalid("email",'Email is Required !!');
		flag = false;
	} else {
		valid("email");
	}

	if (password == "") {
		invalid("password",'Password is Required !!');
		flag = false;
	} else {
		valid("password");
	}
	return flag;
}

function categoryValidation() {
	var title = document.getElementById("title").value;
	var content = document.getElementById("content").value;
	var url = document.getElementById("url").value;
	var metatitle = document.getElementById('metatitle').value;
	var image = document.getElementById('image').value;

	var flag = true;

	if (title == "") {
		invalid("title",'Title is Required !!');
		flag = false;
	} else {
		valid("title");
	}

	if (content == "") {
		invalid("content",'Content is Required !!');
		flag = false;
	} else {
		valid("content");
	}

	if (url == "") {
		invalid("url",'URL is Required !!');
		flag = false;
	} else {
		valid("url");
	}

	if (metatitle == "") {
		invalid("metatitle",'Meta Title is Required !!');
		flag = false;
	} else {
		valid("metatitle");
	}

	if (image == "") {
		invalid("image",'Image is Required !!');
		flag = false;
	}  else {
		valid("image");
	}
	return flag;
}


function postValidation() {
	var title = document.getElementById("title").value;
	var content = document.getElementById("content").value;
	var url = document.getElementById("url").value;
	var published = document.getElementById('published').value;
	var category = document.getElementById('category').value;
	var image = document.getElementById('image').value;

	var flag = true;

	if (title == "") {
		invalid("title",'Title is Required !!');
		flag = false;
	} else {
		valid("title");
	}

	if (content == "") {
		invalid("content",'Content is Required !!');
		flag = false;
	} else {
		valid("content");
	}

	if (url == "") {
		invalid("url",'URL is Required !!');
		flag = false;
	} else {
		valid("url");
	}

	if (published == "") {
		invalid("published",'Published At is Required !!');
		flag = false;
	} else {
		valid("published");
	}

	if (category == "") {
		invalid("category",'Category is Required !!');
		flag = false;
	} else {
		valid("category");
	}

	if (image == "") {
		invalid("image",'Image is Required !!');
		flag = false;
	}  else {
		valid("image");
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


