function validateform() {
    var firstname = document.getElementById('firstname').value;
    var lastname = document.getElementById('lastname').value;
    var day = document.getElementById('day').checked;
    var month = document.getElementById('month').checked;
    var year = document.getElementById('year').checked;
    var genderm = document.getElementById('genderm').checked;
    var genderf = document.getElementById('genderf').checked;
    var emailaddress = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var password = document.getElementById('password').value;
    var confirmpassword = document.getElementById('confirmpassword').value;
    var agree = document.getElementById('agree').checked;

    var flag = true;

    if(firstname == '') {
        var fnameerror = document.getElementById('fnameerror');
        fnameerror.innerHTML = "Firstname is Required !!";
        fnameerror.classList.add('error');
        flag = false;
    }
    if(lastname == '') {
        var lnameerror = document.getElementById('lnameerror');
        lnameerror.innerHTML = "Lastname is Required !!";
        lnameerror.classList.add('error');
        flag = false;
    }
    if (day == '' && month == '' && year == '') {
        var doberror = document.getElementById('doberror');
        doberror.innerHTML = "DOB is Required !!";
        doberror.classList.add('error');
        flag = false;
    }
    if (genderm == false && genderf == false) {
        var gendererror = document.getElementById('gendererror');
        gendererror.innerHTML = "Gender is Required !!";
        gendererror.classList.add('error');
        flag = false;
    }
    if(emailaddress == '') {
        var emailerror = document.getElementById('emailerror');
        emailerror.innerHTML = "Email is Required !!";
        emailerror.classList.add('error');
        flag = false;
    }
    if (password == '' && confirmpassword == '') {
        var passworderror = document.getElementById('passworderror');
        passworderror.innerHTML = "Password is Required !!";
        passworderror.classList.add('error');
        
        var confirmpassworderror = document.getElementById('confirmpassworderror');
        confirmpassworderror.innerHTML = "Confirm Password is Required !!";
        confirmpassworderror.classList.add('error');
        flag = false;
    } else {
        if(password != confirmpassword) {
            var confirmpassworderror = document.getElementById('confirmpassworderror');
            confirmpassworderror.innerHTML = "Password Not Match !!";
            confirmpassworderror.classList.add('error');
            flag = false;
        }
    }
    if(agree == false) {
        var agreeerror = document.getElementById('agreeerror');
        agreeerror.innerHTML = "Please Check !!";
        agreeerror.classList.add('error');
        flag = false;
    }
    return flag;
}




