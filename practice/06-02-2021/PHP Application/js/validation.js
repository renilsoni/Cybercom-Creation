function Validation() {
    var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var nameReg = /^[A-z]+$/;
    var phoneReg = /[1-9]{1}[0-9]{9}/;
      
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var title = document.getElementById("title").value;
    var datetime = document.getElementById("datetime").value;

    var flag = true;
      
    if (name == "") {
        markAsInvalid("name", "Name is Required !!");
        flag = false;
    } else if (!nameReg.test(name)) {
        markAsInvalid("name", "Name is Invalid !!");
        flag = false;
    } else {
        markAsValid("name");
    }
      
    if (email == "") {
        markAsInvalid("email", "Email is Required !!");
        flag = false;
    } else if(!emailRegex.test(email)) {
        markAsInvalid("email", "Email is Invalid !!");
        flag = false;
    } else {
        markAsValid("email");
    }
      
    if (phone == "") {
        markAsInvalid("phone", "Phone is Required !!");
        flag = false;
    } else if (!phoneReg.test(phone)) {
        markAsInvalid("phone", "Phone is Invalid !!");
        flag = false;
    } else {
        markAsValid("phone");
    }
      
    if (title == "") {
        markAsInvalid("title", "Title is Required !!");
        flag = false;
    } else {
        markAsValid("title");
    }

    if (datetime == "") {
        markAsInvalid("datetime", "DateTime is Required !!");
        flag = false;
    } else {
        markAsValid("datetime");
    }

    return flag;
}
  
function markAsValid(id) {
    document.getElementById(id+"-info").style.display = "none";
}
  
function markAsInvalid(id, feedback) {
    document.getElementById(id+"-info").style.display = "block";
    document.getElementById(id+"-info").innerText = feedback;
}