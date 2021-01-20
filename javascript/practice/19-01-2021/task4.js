let name,email,dob;
var arrObj = []

document.getElementById('submit').addEventListener('click',() =>
{
    name = document.getElementById('name').value;
    email = document.getElementById('email').value;
    dob = document.getElementById('dob').value;

    var obj = 
    {
        name : name,
        email : email,
        dob : dob
    }

    arrObj.push(obj);
    console.log(arrObj);
    sessionStorage.setItem('arrData',JSON.stringify(arrObj));
});

document.getElementById('display').addEventListener('click',function(){
    window.open('show.html')
});