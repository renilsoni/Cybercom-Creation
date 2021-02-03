function validateform() {
    var name = document.getElementById('name').value;
    var password = document.getElementById('password').value;
    var address = document.getElementById('address').value;
    var hockey = document.getElementById('hockey').checked;
    var football = document.getElementById('football').checked;
    var badminton = document.getElementById('badminton').checked;
    var cricket = document.getElementById('cricket').checked;
    var volleyball = document.getElementById('volleyball').checked;
    var genderm = document.getElementById('genderm').checked;
    var genderf = document.getElementById('genderf').checked;
    var age = document.getElementById('age').value;
    var file = document.getElementById('file').value;

    var flag = true;

    if(!checkname(name)) {
        flag = false;
    }
    if (!checkpwd(password)) {
        flag = false;
    }
    if (address == '') {
        var addresserror = document.getElementById('addresserror');
        addresserror.innerHTML = "Address is Required !!";
        addresserror.classList.add('error');
        flag = false;

    }
    if (hockey == false && football == false && badminton == false && cricket == false && volleyball == false) {
        var gameerror = document.getElementById('gameerror');
        gameerror.innerHTML = "Game is Required !!";
        gameerror.classList.add('error');
        flag = false;

    }
    if (genderm == false && genderf == false) {
        var gendererror = document.getElementById('gendererror');
         gendererror.innerHTML = "Gender is Required !!";
         gendererror.classList.add('error');
        flag = false;

    }
    if (age == '') {
        var ageerror = document.getElementById('ageerror');
        ageerror.innerHTML = "Age is Required !!";
        ageerror.classList.add('error');
        flag = false;

    }
    if (!checkfile(file)) {
        flag = false;
    }
    //alert (name + " " + password + " " + address + " " + game  + " " + age + " " + file );
    return flag;

}






