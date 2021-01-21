class Admin
{
    constructor(name,email,password,city,state)
    {
        this.name = name;
        this.email = email;
        this.password = password;
        this.city = city;
        this.state = state;
    }
}

let checkAdminData = JSON.parse(localStorage.getItem('admin'));
if(checkAdminData)
{
    alert("Admin Already Registerd !!");
    document.getElementById('register').disabled = true;
}
else
{
    let adminArray = [];

    document.getElementById('register').addEventListener('click',function()
    {
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let confirmpassword = document.getElementById('confirmpassword').value;
        let city = document.getElementById('city').value;
        let state = document.getElementById('state').value;

        if(name !== '' && email !== '' && password !== '' && confirmpassword !== '' && city !== '' && state !== '')
        {
            if(password === confirmpassword)
            {
                adminArray.push(new Admin(name,email,password,city,state));
                localStorage.setItem('admin',JSON.stringify(adminArray));
                alert('Admin Register Successfully !!');
            }
            else
            {
                alert("Password Not Match !!");
            }
        }
        else
        {
            alert('Please Fill All Details !!');
        }
        document.getElementById('register').disabled = true;
    });
}

document.getElementById('loginbtn').addEventListener('click',()=>
{
    window.open('login.html');
});