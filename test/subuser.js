
let username = JSON.parse(sessionStorage.getItem('loginsession'));

if(username === null)
{
    window.location = 'login.html';
}
console.log(username);
document.getElementById('name').textContent = "Welcome, "+ username.name;

let userData = JSON.parse(localStorage.getItem('users'));

let currDate = new Date().toISOString().slice(0,10);
console.log(currDate);
console.log(userData[0].bdate);
console.log(userData.length);

for(const i = 0; i <= userData.length; i++)
{
    if(userData[i].name === username.name && userData[i].bdate === currDate)
    {
        document.getElementById('msg').innerHTML = "<h1> Happy Birthday </h1>";
        break;
    }
}



