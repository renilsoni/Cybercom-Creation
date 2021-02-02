function validateform() {
    var name = document.getElementById('name').value;
    var password = document.getElementById('password').value;
    var genderm = document.getElementById('genderm').checked;
    var genderf = document.getElementById('genderf').checked;
    var address = document.getElementById('address').value;
    var day = document.getElementById('day').checked;
    var month = document.getElementById('month').checked;
    var year = document.getElementById('year').checked;
    var hockey = document.getElementById('hockey').checked;
    var football = document.getElementById('football').checked;
    var cricket = document.getElementById('cricket').checked;
    var volleyball = document.getElementById('volleyball').checked;
    var maritalstatusm = document.getElementById('statusm').checked;
    var maritalstatusu = document.getElementById('statusu').checked;
    var agree = document.getElementById('agree').checked;

    var flag = true;

    if(name == '') {
        var nameerror = document.getElementById('nameerror');
        nameerror.innerHTML = "Name is Required !!";
        nameerror.classList.add('error');
        flag = false;
    }
    if (password == '') {
        var passworderror = document.getElementById('passworderror');
        passworderror.innerHTML = "Password is Required !!";
        passworderror.classList.add('error');
        flag = false;
    }
    if (genderm == false && genderf == false) {
        var gendererror = document.getElementById('gendererror');
         gendererror.innerHTML = "Gender is Required !!";
         gendererror.classList.add('error');
         flag = false;
    }
    if (address == '') {
        var addresserror = document.getElementById('addresserror');
        addresserror.innerHTML = "Address is Required !!";
        addresserror.classList.add('error');
        flag = false;
    }
    if (day == '' && month == '' && year == '') {
        var doberror = document.getElementById('doberror');
        doberror.innerHTML = "DOB is Required !!";
        doberror.classList.add('error');
        flag = false;
    }
    if (hockey == false && football == false && cricket == false && volleyball == false) {
        var gameerror = document.getElementById('gameerror');
        gameerror.innerHTML = "Game is Required !!";
        gameerror.classList.add('error');
        flag = false;
    }
    if (maritalstatusm == false && maritalstatusu == false) {
        var statuserror = document.getElementById('statuserror');
        statuserror.innerHTML = "Marital Status is Required !!";
        statuserror.classList.add('error');
        flag = false;
    }
    if(agree == false) {
        var agreeerror = document.getElementById('agreeerror');
        agreeerror.innerHTML = "Please Check !!";
        agreeerror.classList.add('error');
        flag = false;
    }
    return flag;
}




