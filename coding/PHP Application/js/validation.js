$(document).ready(function(){

    //loaddata();

    // function loaddata() {

    //     $.ajax({
    //         url : 'lib/action.php',
    //         method : 'POST',
    //         data : {load:'load'},
    //         success : function(data)
    //         {
    //             $('#tableview').html(data);
    //         }
    //     });
    // }

    loaddata(1,5);
    pagination();

    function loaddata(page,limit) {

        $.ajax({
            url : 'lib/action.php',
            method : 'POST',
            data : {load:'load',page:page,limit:limit},
            success : function(data)
            {
                $('#tableview').html(data);
            }
        });
    }

    function pagination() {

        $.ajax({
            url : 'lib/action.php',
            method : 'POST',
            data : {pagination:'pagination',limit:5},
            success : function(data)
            {
                $('#pagination').html(data);
            }
        });
    }

    $(document).on('click','.page-link',function()
    {
        var id = $(this).attr('data');
        $('.page-item').removeClass('active');
        $(this).parent('li').addClass('active');
        loaddata(id,5);
    });


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