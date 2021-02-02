function validateform() {

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var flag = true;

    if(email == '') {
        var emailerror = document.getElementById('emailerror');
        emailerror.innerHTML = "Email is Required !!";
        emailerror.classList.add('error');
        flag = false;
    }
    if(password == '') {
        var passworderror = document.getElementById('passworderror');
        passworderror.innerHTML = "Password is Required !!";
        passworderror.classList.add('error');
        flag = false;
    }
    
    return flag;
}
