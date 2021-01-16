
var Person = function (name,year,job) // Constructor
{
	this.name = name;
	this.year = year;
	this.job = job;
}

var vaibhav = new Person('vaibhav',1999,'Trainee'); // Object
console.log(vaibhav);

Person.prototype.calculateAge = function() // Function Prototype
{
	console.log(2021 - this.year);
}

console.log(vaibhav.calculateAge()); // Inherite calculateAge into object

Person.prototype.lastName = 'Soni';

console.log(vaibhav.lastName);

var renil = new Person('Renil',1998,'Trainee');
console.log(renil);

console.log(renil.calculateAge());

/* ============= Object.create ================ */

var personProto = 
{
	calculateAge : function()
	{
		console.log(2019 - this.year);
	}
};

var rajan = Object.create(personProto); // Object Prototype
rajan.name = 'Rajan';
rajan.year = 1999;
rajan.job = 'trainee';

var vm = Object.create(personProto,{
	name : { value : 'vaibhav'},
	year : { value : 1999},
	job :  {value : 'trainee'}
});


/* ============= Primitives & Objects ================ */
	
	// Primitives

	var a = 20;
	var b = a;
	a = 21;
	console.log(a);
	console.log(b);

	// Objects 

	var renilObj = 
	{
		name : 'Renil',
		age : 23
	};

	var vmObj = renilObj;
	renilObj.age = 25;
	console.log(renilObj.age);
	console.log(vmObj.age);

	// Functions 

	var age = 30;
	var ren = 
	{
		name : 'Renil',
		city : 'Ahm'
	};

	function change(x,y)
	{
		x = 35;
		y.city = 'Ahmedabad';
	}

	change(age,ren);

	console.log(age);
	console.log(ren.city);


/* ============= First Class Functions Passing Functions as Arguments ================ */

	var years = [1998,2010,1983,1972,1965];

	function calcAges(arr,fn)
	{
		arrResult = [];
		for(var i = 0; i < arr.length; i++)
		{
			arrResult.push(fn(arr[i]));
		}
		return arrResult;
	}

	function calAge(el)
	{
		return 2021 - el;
	}

	function isFullAge(el)
	{
		return el >= 18;
	}

	function maxHeartRate(el)
	{
		if(el >= 18 && el <= 81)
		{
			return Math.round(206.9 - (0.67 * el));
		}
		else
		{
			return -1;
		}
	}

	var ages = calcAges(years,calAge);
	console.log(ages);

	var fullAges = calcAges(ages,isFullAge);
	console.log(fullAges);

	var maxHeartRates = calcAges(ages,maxHeartRate);
	console.log(maxHeartRates);
