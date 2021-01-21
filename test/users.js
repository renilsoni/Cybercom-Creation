//its is for login session detail show

let username = localStorage.getItem('logindetail');
document.getElementById('name').textContent = "Welcome, "+ username;

// Add user 

let usersArray = [];

document.getElementById('adduser').addEventListener('click',()=>
{
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let date = document.getElementById('bdate').value;

    console.log(name);

    if(name !== '' && email !== '' && password !== '' && date !== '')
    {
        let userObj = new Object();
        userObj.name = name;
        userObj.email = email;
        userObj.password = password;
        userObj.date = date;
        usersArray.push(userObj);
        localStorage.setItem('users',JSON.stringify(usersArray));
        showData();
    }
    else
    {
        alert("Please Fill All Details !!");
    }    
})

function showData()
{
    let userData = JSON.parse(localStorage.getItem('users'));

    let displayData = '';

    if(userData)
    {
        displayData =  `<table class="table table-bordered">`;
        displayData = `${displayData} <tr><th>Name</th><th>Email</th><th>Password</th><th>Birth Date</th><th>Age</th><th>Action</th></tr>`;
        for(const data of userData)
        {
            displayData = `${displayData} <tr><td>${data.name}</td><td>${data.email}</td><td>${data.password}</td><td>${data.bdate}</td><td>Age</td><td>edit delete</td></tr>`
        }
        displayData = `${displayData} </table>`;
        document.getElementById('tabledata').innerHTML = displayData;
    }
}
