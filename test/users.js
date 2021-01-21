//its is for login session detail show

let username = localStorage.getItem('logindetail');
document.getElementById('username').textContent = "Welcome, "+ username;

let usersArray = [];
//

if(JSON.parse(localStorage.getItem('users')))
{
    usersArray = JSON.parse(localStorage.getItem('users'));
}

showData();

// Add user 



function addUserData()
{
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let birthdate = document.getElementById('bdate').value;

    console.log(name);

    if(name !== '' && email !== '' && password !== '' && birthdate !== '')
    {
        let userObj = new Object();
        userObj.name = name;
        userObj.email = email;
        userObj.password = password;
        userObj.bdate = birthdate;
        usersArray.push(userObj);
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
                data.name = document.getElementById('name').value = data.name;
                data.email = document.getElementById('email').value = data.email;
                data.password = document.getElementById('password').value = data.password;
                data.bdate = document.getElementById('bdate').value = data.bdate;
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