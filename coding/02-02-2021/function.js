function checkname(name) {
    var reg = /^[A-z]+$/;
    if(name == '') {
        var nameerror = document.getElementById('nameerror');
        nameerror.innerHTML = "Name is Required !!";
        nameerror.classList.add('error');
        return false;
    } else if (!reg.test(name)) {
        var nameerror = document.getElementById('nameerror');
        nameerror.innerHTML = "Only Characters Are Allowed !!";
        nameerror.classList.add('error');
        return false;
    } else {
        var nameerror = document.getElementById('nameerror');
        nameerror.innerHTML = "";
        return true;
    } 
}

function checkemail(email) {
    var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(email == '') {
        var emailerror = document.getElementById('emailerror');
        emailerror.innerHTML = "Email is Required !!";
        emailerror.classList.add('error');
        return false;
    } else if (!reg.test(email)) {
        var emailerror = document.getElementById('emailerror');
        emailerror.innerHTML = "Enter Valid Email !!";
        emailerror.classList.add('error');
        return false;
    } else {
        var emailerror = document.getElementById('emailerror');
        emailerror.innerHTML = "";
        return true;
    } 
}

function checkpwd(pwd) {
    var reg = /^[A-Za-z0-9]\w{7,}$/;
    if(pwd == '') {
        var passworderror = document.getElementById('passworderror');
        passworderror.innerHTML = "Password is Required !!";
        passworderror.classList.add('error');
        return false;
    } else if (!reg.test(pwd)) {
        var passworderror = document.getElementById('passworderror');
        passworderror.innerHTML = "Password Must Have Capital Letter, Small Letter, One Number & More than 7 Characters !!";
        passworderror.classList.add('error');
        return false;
    } else {
        var passworderror = document.getElementById('passworderror');
        passworderror.innerHTML = "";
        return true;
    } 
}

function checkfile(file) {
    var reg = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    console.log(reg.exec(file));
    if(file == '') {
        var fileerror = document.getElementById('fileerror');
        fileerror.innerHTML = "File is Required !!";
        fileerror.classList.add('error');
        return false;
    } else if (!reg.exec(file)) {
        var fileerror = document.getElementById('fileerror');
        fileerror.innerHTML = "Please upload files having extensions: .jpg , .jpeg , .png , .gif only.";
        fileerror.classList.add('error');
        return false;
    } else {
        var fileerror = document.getElementById('fileerror');
        fileerror.innerHTML = "";
        return true;
    } 
}