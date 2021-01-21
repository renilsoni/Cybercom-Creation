//its is for login session detail show
let username = JSON.parse(sessionStorage.getItem('loginsession'));
console.log(username);
document.getElementById('name').textContent = "Welcome, "+ username.name;

let usersArray = [];
//

if(JSON.parse(localStorage.getItem('users')))
{
    usersArray = JSON.parse(localStorage.getItem('users'));
}

showData();

// Add user 

class User
{
    constructor(name,email,password,bdate)
    {
        this.name = name;
        this.email = email;
        this.password = password;
        this.bdate = bdate;
    }
}

function addUserData()
{
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let bdate = document.getElementById('bdate').value;

    console.log(name);

    if(name !== '' && email !== '' && password !== '' && bdate !== '')
    {
        usersArray.push(new User(name,email,password,bdate));
        localStorage.setItem('users',JSON.stringify(usersArray));
    }
    else
    {
        alert("Please Fill All Details !!");
    }    
}

document.getElementById('adduser').addEventListener('click',()=>
{
    addUserData();  
    showData();
});

document.getElementById('updateuser').addEventListener('click',() => 
{
    let newname = document.getElementById('name').value;
    let oldname = document.getElementById('oldname').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let bdate = document.getElementById('bdate').value;

    let editData = JSON.parse(localStorage.getItem('users'));

    if(editData)
    {
        usersArray = editData;
    }

    let userIndex = usersArray.findIndex(user => user.name === oldname);
    usersArray[userIndex] = new User(newname,email,password,bdate);
    localStorage.setItem('users',JSON.stringify(usersArray));
    window.location.reload();
});

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
            displayData = `${displayData} <tr><td>${data.name}</td><td>${data.email}</td><td>${data.password}</td><td>${data.bdate}</td><td>Age</td><td><a href="#" onclick=editUser('${data.name}')>edit</a>&nbsp;<a href="#" onclick=deleteUser('${data.name}')>delete</a></td></tr>`
        }
        displayData = `${displayData} </table>`;
        document.getElementById('tabledata').innerHTML = displayData;
    }
}


function editUser(name)
{
    document.getElementById('adduser').classList.add('d-none');
    document.getElementById('updateuser').classList.add('d-block');

    let editData = JSON.parse(localStorage.getItem('users'));

    if(editData)
    {
        for(const data of editData)
        {
            if(data.name === name)
            {
                document.getElementById('name').value = data.name;
                document.getElementById('oldname').value = data.name;
                document.getElementById('email').value = data.email;
                document.getElementById('password').value = data.password;
                document.getElementById('bdate').value = data.bdate;
            }
        }
    }
}

function deleteUser(name)
{
    usersArray = usersArray.filter((user) => user.name !== name);
    localStorage.setItem('users',JSON.stringify(usersArray));
    showData();
}