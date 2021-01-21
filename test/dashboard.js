let username = JSON.parse(sessionStorage.getItem('loginsession'));

if(username === null)
{
    window.location = 'login.html';
}

console.log(username);
document.getElementById('name').textContent = "Welcome, "+ username.name;

let userData = JSON.parse(localStorage.getItem('users'));

let userCountChild = 0
let userCountTeenager = 0
let userCountMan = 0

for(let i = 0; i <= userData.length; i++)
{
    if(userData[i].age() < 18)
    {
        userCountChild++;
    }
    else if(userData[i].age >= 18 && userData[i].age < 50)
    {
        userCountTeenager++;
    }
    else
    {
        userCountMan++;
    }
}


document.getElementById('user1').innerHTML = `<h4>${userCountChild}</h4>`;
document.getElementById('user2').innerHTML = `<h4>${userCountTeenager}</h4>`;
document.getElementById('user3').innerHTML = `<h4>${userCountMan}</h4>`;

