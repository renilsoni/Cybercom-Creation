
let adminData =JSON.parse(localStorage.getItem('admin'));
let userData =JSON.parse(localStorage.getItem('users'));
console.log(adminData[0].email);
document.getElementById('submit').addEventListener('click',()=>
{
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    let flag = false;

    if(adminData[0].email === username && adminData[0].password === password)
    {
        let loginObj = 
        {
            name : adminData[0].name,
            time : new Date().toLocaleTimeString()
        }
        sessionStorage.setItem('loginsession',JSON.stringify(loginObj));
        flag = true;
        if(flag === true)
        {
            window.open('dashboard.html');
        }
        else
        {
            alert("Wrong Username & Password");
        }   
    }
    else
    {
        for(const x of userData)
        {
            flag = false;
            if(x.email === username && x.password === password)
            {
                let loginObj = 
                {
                    name : x.name,
                    time : new Date().toLocaleTimeString()
                }
                sessionStorage.setItem('loginsession',JSON.stringify(loginObj));
                flag = true;
                break;
            }
        }
        if(flag === true)
        {
            window.open('subuser.html');
        }
        else
        {
            alert("Wrong Username & Password");
        }
    }
});

document.getElementById('register').addEventListener('click',()=>
{
    window.open('register.html');
});

