function validateform() {

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    var flag = true;

    if(name == '') {
        var nameerror = document.getElementById('nameerror');
        nameerror.innerHTML = "Name is Required !!";
        nameerror.classList.add('error');
        flag = false;
    }
    if(email == '') {
        var emailerror = document.getElementById('emailerror');
        emailerror.innerHTML = "Email is Required !!";
        emailerror.classList.add('error');
        flag = false;
    }
    if(subject == '') {
        var subjecterror = document.getElementById('subjecterror');
        subjecterror.innerHTML = "Subject is Required !!";
        subjecterror.classList.add('error');
        flag = false;
    }
    if(message == '') {
        var messageerror = document.getElementById('messageerror');
        messageerror.innerHTML = "Message is Required !!";
        messageerror.classList.add('error');
        flag = false;
    }
    return flag;
}
