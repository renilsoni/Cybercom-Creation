let userArr = [];

if(JSON.parse(localStorage.getItem('user')))
{
    userArr = JSON.parse(localStorage.getItem('user'));
}

document.getElementById('submit').addEventListener('click',()=>
{
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    let userObj = 
    {
        name : name,
        email : email,
        password : password
    };

    userArr.push(userObj);

    localStorage.setItem('user',JSON.stringify(userArr));
});

document.getElementById('show').addEventListener('click',() =>
{
    showData();
});


function showData()
{
    let data = JSON.parse(localStorage.getItem('user'));
    //console.log(data);
    let dataDisplay = '';

    if(data)
    {
        dataDisplay =  `<table border='1'>`;
        for(let x of data)
        {
            dataDisplay =  `${dataDisplay} <tr><td>${x.name}</td><td>${x.email}</td><td><button onclick=deleteUser('${x.email}')>Delete</button></td></tr>`;
        }
    }
    else
    {
        dataDisplay =  `<h4> No Data Found </h4>`;
    }
    
    dataDisplay = `${dataDisplay} </table>`;

    document.getElementById('display').innerHTML = dataDisplay;
}

function deleteUser(email)
{
    let flag = confirm('Are you sure want to delete ?');
    if(flag)
    {
        userArr = userArr.filter((user) => user.email !== email);
        localStorage.setItem('user',JSON.stringify(userArr));
        showData();
    }
}