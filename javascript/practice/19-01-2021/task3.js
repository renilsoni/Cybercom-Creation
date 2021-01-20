var renil = 
{
    name : 'Renil',
    age : 23
};
var vaibhav = 
{
    name : 'vaibhav',
    age : 22
};
var rajan = 
{
    name : 'rajan',
    age : 21
};
var ravi = 
{
    name : 'ravi',
    age : 20
};

var arrData = [];
arrData.push(renil);
arrData.push(vaibhav);
arrData.push(rajan);
arrData.push(ravi);

console.log(arrData);

arrData.sort((a,b) => a.name.localeCompare(b.name));

// arrData.sort((a,b) => a.age.sort);

console.log(arrData);
