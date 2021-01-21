function logout()
{
    let loginsession = JSON.parse(sessionStorage.getItem('loginsession'));

    loginsession.logouttime = new Date().toLocaleTimeString();

    let sessionData = JSON.parse(localStorage.getItem('sessiondata'));

    let data = [];

    if(sessionData)
    {
        data = sessionData;    
    }

    data.push(loginsession);
    localStorage.setItem('sessiondata',JSON.stringify(data));
    sessionStorage.removeItem('loginsession');
    window.location = 'login.html';
}