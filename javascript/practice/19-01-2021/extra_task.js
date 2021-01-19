/* ================ First Task ================= */

    var renil = 
    {
        name : 'Renil',
        age : 23,
        job : 'Trainee',
        city : 'Ahm'
    };

    for(var prop in renil)
    {
        console.log(prop);
    }

/* ================ Second Task ================= */

    //localStorage.setItem("name","Renil");

    var obj1 = 
    {
        name : 'Renil',
        age : 23,
        email : 'r@gmail.com',
        number : '8200385941'
    };

    var obj2 = 
    {
        name : 'Vaibhav',
        age : 23,
        email : 'v@gmail.com',
        number : '9558413998'
    };
    var obj3 = 
    {
        name : 'Rajan',
        age : 22,
        email : 'r@gmail.com',
        number : '9998423736'
    };

    var objects = [];
    objects.push(obj1);
    objects.push(obj2);
    objects.push(obj3);

    console.log(objects);

    localStorage.setItem('obj',JSON.stringify(objects));

    var arr = [];

    arr = JSON.parse(localStorage.getItem("obj") || "[]");
    console.log(arr);

    var obj11 = [];
    obj11 = arr[0];

    var obj12 = [];
    obj12 = arr[1];

    var obj13 = [];
    obj13 = arr[2];

    document.write("<table border='1'>");
    document.write("<tr><td>"+obj11.name+"</td><td>"+obj11.age+"</td><td>"+obj11.email+"</td><td>"+obj11.number+"</td></tr>");
    document.write("<tr><td>"+obj12.name+"</td><td>"+obj12.age+"</td><td>"+obj12.email+"</td><td>"+obj12.number+"</td></tr>");
    document.write("<tr><td>"+obj13.name+"</td><td>"+obj13.age+"</td><td>"+obj13.email+"</td><td>"+obj13.number+"</td></tr>");
    document.write("</table>");