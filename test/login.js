

document.getElementById('submit').addEventListener('click',()=>
{
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    let adminData =JSON.parse(localStorage.getItem('admin'));

    let flag = false;

    for(const data of adminData)
    {
        flag = false;
        if(data.email === username && data.password === password)
        {
            flag = true;
            break;
        }
    }

    if(flag === true)
    {
        window.open('dashboard.html');
    }
    else
    {
        alert('Wrong Username & Password !!!');
    }
});

document.getElementById('register').addEventListener('click',()=>
{
    window.open('register.html');
});