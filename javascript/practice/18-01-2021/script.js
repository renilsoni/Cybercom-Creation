/* ================= Arrow Functions Basics ================== */

	// ES5

	const years = [1998,1987,1982,1975,1986];

	var ages5 = years.map(function(el) {
		return 2021 - el;
	});

	console.log(ages5);

	// ES6

	let ages6 = years.map(el => 2021 - el);
	console.log(ages6);

	ages6 = years.map((el , index) => `Index : ${index + 1} Age : ${2021-el}`);
	console.log(ages6);

	ages6 = years.map((el , index) =>{
		const now = new Date().getFullYear();
		const age = now - el;
		return `Age ${age}`;
	});
	console.log(ages6);


/* ================= Arrow Functions Lexical _this_ Keyword ================== */

	// ES5

	var box5 = 
	{
		color : 'red',
		position : 1,
		clickMe : function()
		{
			var self = this;
			document.getElementById('.red').addEventListener('click',function()
			{
				var str = 'This is '+ self.color + ' Box and Position '+ self.position + ';';
				alert(str);
			});
		}
	}

	// box5.clickMe();

	// ES5

	var box6 = 
	{
		color : 'red',
		position : 1,
		clickMe : function()
		{
			document.getElementById('.red').addEventListener('click',() =>
			{
				var str = 'This is '+ this.color + ' Box and Position '+ this.position + ';';
				alert(str);
			});
		}
	}

	//box6.clickMe();

	var box66 = 
	{
		color : 'red',
		position : 1,
		clickMe : () =>
		{
			document.getElementById('.red').addEventListener('click',() =>
			{
				var str = 'This is '+ this.color + ' Box and Position '+ this.position + ';';
				alert(str);
			});
		}
	}

	//box66.clickMe();

	function Person(name)
	{
		this.name = name;
	}

	// ES5

	Person.prototype.myFriends5 = function(friends)
	{
		var arr = friends.map(function(el)
		{
			return this.name + ' is Friend with '+ el;
		});
		console.log(arr);
	}


	var friends = ['Vaibhav','Rajan','Shraddha'];

	new Person('Renil').myFriends5(friends);

	// ES6

	Person.prototype.myFriends6 = function(friends)
	{
		var arr = friends.map(el => `${this.name} is Friend with ${el}`);
		console.log(arr);
	}

	new Person('Ravi').myFriends6(friends);


/* ================= Destructuring ================== */

	// ES5

	var renil = ['Renil',23];
	// var name = renil[0];
	// var age = renil[1];

	// ES6

	const [name, age] = ['Renil',26];
	console.log(name);
	console.log(age);

	const obj = 
	{
		firstname : 'Renil',
		lastname : 'Soni'
	};

	const {firstname,lastname} = obj;
	console.log(firstname);
	console.log(lastname);

	const {firstname : a,lastname : b} = obj;
	console.log(a);
	console.log(b);


	function calAgeRetirement(year)
	{
		const age = new Date().getFullYear() - year;
		return [age, 65 - age];
	}

	const [age2, retire] = calAgeRetirement(1998);

	console.log(age2);
	console.log(retire);


/* ================= Destructuring ================== */

	const boxes = document.querySelectorAll('.box');
	console.log(boxes);

	// ES5

	var boxarr5 = Array.prototype.slice.call(boxes);
	// console.log(boxarr5);

	boxarr5.forEach(function(cur){
		cur.style.backgroundColor = 'blue';
	});

	// ES6

	//Array.from(boxes).forEach(cur => cur.style.backgroundColor = 'red');

	// For Loop ES5

	// for (let i = 0; i < boxarr5.length; i++) 
	// {
	//     if (boxarr5[i].className === 'box blue') 
	//     {
	//         continue;
	//     }
 //    	boxarr5[i].textContent = "i changed to blue;"
	// }

	// ES6

	for (const cur of boxarr5)
	{
		if (cur.className.includes('blue')) 
	    {
	        continue;
	    }
    	cur.textContent = "i changed to blue;"
	}


	// ES5

	var ages = [15,20,22,25,24,10];

	var full = ages.map(function(cur)
	{
		return cur >= 18;
	});

	console.log(full);

	console.log(full.indexOf(true));
	console.log(ages[full.indexOf(true)]);

	// ES6

	console.log(ages.findIndex(cur => cur >= 18));

	console.log(ages.find(cur => cur >= 18));
