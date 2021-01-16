/* ================== First Class Functions Functions Returning Functions ================= */

	function interviewQuestion(job) 
	{
		if (job === 'teacher') 
		{
			return function(name) // Anonymous Function
			{
				console.log('What subject do you teach '+ name +' ?');
			}
		}
		else if(job === 'designer')
		{
			return function(name)
			{
				console.log(name + ' Can you explain what UX Design is ?');
			}
		}
		else
		{
			return function(name)
			{
				console.log('What do you do '+ name +' ?');
			}
		}
	}

	var teacherQuestion = interviewQuestion('teacher');
	teacherQuestion('Renil');

	var designerQuestion = interviewQuestion('designer');
	designerQuestion('Renil');
	designerQuestion('Vaibhav');
	designerQuestion('Rajan');	

	interviewQuestion('driver')('Vaibhav');


/* ================== Immediately Invoked Function Expressions (IIFE) ================= */

	// function game()
	// {
	// 	var score = Math.random() * 10;
	// 	console.log(score >= 7);
	// }

	// game();

	(function ()
	{
		var score = Math.random() * 10;
		console.log(score >= 7);
	})();

	(function (goodluck)
	{
		var score = Math.random() * 10;
		console.log(score >= 7 - goodluck);
	})(5);


/* ================== Closures ================= */

	// Inner function has always access to the variable and parameters of its outer function, 
	// even after the outer function has returned. 

	// Closure : call function and return the function

	function retirnment(retirnmentAge) 
	{
		var a = " years left untill retirnment.";
		return function (yearOfBirth)
		{
			var age = 2021 - yearOfBirth;
			console.log(retirnmentAge - age + a);
		}
	}

	var retirnmentIndia = retirnment(58);
	var retirnmentUS = retirnment(60);
	var retirnmentGermany = retirnment(63);

	retirnmentIndia(1998);
	retirnmentGermany(1998);
	retirnmentUS(1998);

	// Same for the interviewQuestion Using Closures.

	function interviewQuestion(job)
	{
		return function(name)
		{
			if (job === 'teacher') 
			{
				console.log('What subject do you teach '+ name +' ?');
			}
			else if(job === 'designer')
			{
				console.log(name + ' Can you explain what UX Design is ?');
			}
			else
			{
				console.log('What do you do '+ name +' ?');
			}
		}
	}

	var teacherQuestion = interviewQuestion('teacher');
	var designerQuestion = interviewQuestion('designer')
	teacherQuestion('Renil');
	designerQuestion('Renil');

	interviewQuestion('driver')('Rajan');

/* ================== Bind, Call and Apply ================= */

	var renil = 
	{
		name : 'Renil',
		age : 23,
		job : 'Trainee',
		presentation : function (style , timeOfDay)
		{
			if(style === 'formal')
			{
				console.log('Good '+timeOfDay+ ' , Ladies and Gentalman.'+ ' I\'m '+ this.name + 
					' I\'m a '+this.job+'. I\'m '+this.age+ ' years old.');
			}
			else if (style === 'friendly')
			{
				console.log('Hey Guys, I\'m '+ this.name + 
					' I\'m a '+this.job+'. I\'m '+this.age+ ' years old.');
			}
			else
			{
				console.log('I\'m '+ this.name + 
					' I\'m a '+this.job+'. I\'m '+this.age+ ' years old.');
			}
		}
	}

	renil.presentation('formal','Morning');
	renil.presentation('friendly','Morning');

	var vaibhav = 
	{
		name : 'Vaibhav',
		age : 22,
		job : 'Teacher'
	}

	renil.presentation.call(vaibhav,'formal','Evening'); // Using Call Method

	// renil.presentation.apply(vaibhav,['friendly','Night']); // Using Apply Method, only pass array as args

	var vmPresentation = renil.presentation.bind(vaibhav); // Diiferent Method for calling Bind Method
	vmPresentation('formal','Afternoon');

	var vmPresentation = renil.presentation.bind(vaibhav , 'friendly');
	vmPresentation('Morning');


	/// Second Example

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

	function isFullAge(limit,el)
	{
		return el >= limit;
	}

	var ages = calcAges(years, calAge);
	console.log(ages);

	var fullage = calcAges(ages, isFullAge.bind(this,35)); // Add parameter in function using bind method.
	console.log(fullage);


/* ================== Variable Declarations with let and const ================= */

	// let & const :- It is access within block.
	// we can't use let variable without declare otherwise it through error

	// ES5

	function driverLicence5(passedTest)
	{
		if (passedTest) 
		{
			var firstName = 'Renil';
			var year = 1998;
		}
		console.log(firstName + ' born in '+year+' allowed for drive.');
	}

	driverLicence5(true);

	// ES6

	function driverLicence5(passedTest)
	{
		if (passedTest) 
		{
			let firstName = 'Renil';
			const year = 1998;
		}
		//console.log(firstName + ' born in '+year+' allowed for drive.');  // we can't use this variable outside block
	}

	driverLicence5(true);

	let i = 20;

	for(let i = 0; i < 5; i++) // loop start with 0 to 4 because of let variable using within block
	{
		console.log(i);
	}

	console.log(i);


/* ================== Blocks and IIFEs ================= */

	// ES6 (Block)

	{
		let a = 3;
		const b = 2;
	}

	//console.log(a + b); // we can't use outside the block

	// ES5 (IIFE)

	(function()
	{
		var x = 3;
	});

	//console.log(x); //same as a ES6

/* ================== Strings in ES6  ES2015 ================= */

	let fname = 'Renil';
	let lname = 'Soni';
	const year = 1998;

	function calAge(year)
	{
		return 2021 - year;
	}

	// ES5
	console.log('This is '+ fname + " " + lname + ' He was born in '+ year + ' He was '+calAge(year)+ ' years old.');

	// ES6
	console.log(`This is ${fname} ${lname}. He was born in ${year}. He was ${calAge(year)} years old.`);

	// String Methods in ES6

	const name = `${fname} ${lname}`;
	console.log(name.startsWith('Re'));
	console.log(name.endsWith('ni'));
	console.log(name.includes('i'));
	console.log(`${fname} `.repeat(5));