let username = JSON.parse(sessionStorage.getItem('loginsession'));
console.log(username);
document.getElementById('name').textContent = "Welcome, "+ username.name;

let sessionData = JSON.parse(localStorage.getItem('sessiondata'));

if(sessionData)
{
    displayData =  `<table class="table table-bordered">`;
    displayData = `${displayData} <tr><th>Name</th><th>Login Date Time</th><th>Logout Date Time</th></tr>`;
    for(const data of sessionData)
    {
        displayData = `${displayData} <tr><td>${data.name}</td><td>${data.time}</td><td>${data.logouttime}</td></tr>`
    }
    displayData = `${displayData} </table>`;
    document.getElementById('tabledata').innerHTML = displayData;
}