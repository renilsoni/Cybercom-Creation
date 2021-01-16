/*
*************** IF ELSE Condition **********************
*/

	var fname = 'Renil';
	var status = 'Single';

	if (status == 'Married')
	{
		console.log(fname+' is Married !!');
	}
	else
	{
		console.log(fname+' is Not Married !!');
	}

	var isMarried = true;

	if (isMarried)
	{
		console.log(fname+' is Married !!');
	}
	else
	{
		console.log(fname+' is Not Married !!');
	}

/*
*************** Boolean Logic **********************
*/

// ********************************

// 	True && True = True
// 	True && False = False
// 	False && False = False

// ********************************

// 	True || True = True
// 	True || False = True
// 	False || False = False

// ********************************

	var age = 35;

	if (age < 14) 
	{
		console.log(fname+' is Boy');
	}
	else if(age >= 14 && age < 20)
	{
		console.log(fname+' is Teenager');
	}
	else if(age >= 20 && age < 30)
	{
		console.log(fname+' is Young Man');
	}
	else
	{
		console.log(fname+' is Man');
	}

/*
*************** Ternary Operator AND Switch Statement **********************
*/
	// Ternary Operator

	age = 20;

	age >= 13 ? console.log(fname+'is Teenager.') : console.log(fname+'is Boy.');

	var type = age >= 13 ? 'Teenager' : 'Boy';
	console.log(type);

	// Switch Statement

	var job = 'worker';

	switch(job)
	{
		case 'abvc':
		case 'worker': //if job is worker than execute
			console.log(fname+ " is worker.");
			break;
		case 'teacher': //if job is teacher than execute
			console.log(fname+ " is teacher.");
			break;
		case 'driver': //if job is driver than execute
			console.log(fname+ " is driver.");
			break;
		case 'employee': //if job is employee than execute
			console.log(fname+ " is employee.");
			break;
		default: //not match any case than default execute 
			console.log(fname+ " is something else.");
	}


	age = 15;
	switch(true)
	{
		case age < 14:
			console.log(fname+' is Boy');
			break;
		case age >= 14 && age < 20:
			console.log(fname+' is Teenager');
			break;
		case age >= 20 && age < 30:
			console.log(fname+' is Young Man');
			break;
		default:
			console.log(fname+' is Man');
	}


/*
*************** Truthy AND Falsy Value & Equality Operator **********************
*/
	// Truthy AND Falsy Value

		// Falsy Value : undefined, null, 0, ''
		// Truthy Value : Not a Falsy Value.

		var height; 
		// height = 23 // it return TRUE bcoz it is defined.
		// height = 0 // it return FALSE bcoz it is 0.

		if (height) 
		{
			console.log('height is defined');
		}

	// Equality Operator 

		// == operator is equality operator. Only Compare the Value
		// === operator is strick equality operator. Compare the Value & Datatype
		height = 23;

		if (height == '23') // its 23 converts into number and than compare is.
		{
			console.log('Its return true');
		}

		if (height === '23') // it compare height is number and 23 is a string so return false
		{
			console.log('Both values are same datatype');
		}
		else
		{
			console.log('Both values are different datatype');
		}

/*
*************** Function **********************
*/

	function calculateAge(birthYear) 
	{
		return 2021 - birthYear;
	}

	var ageRenil = calculateAge(1998);
	var ageShreyas = calculateAge(2001);
	console.log(ageRenil);
	console.log(ageShreyas);

	function retireUntillYear(year,name)
	{
		var age = calculateAge(year);
		var retire = 65 - age;
		
		if (retire > 0) 
		{
			console.log(name + ' retired in '+retire+ ' years');
		}
		else
		{
			console.log(name + ' is alredy retired.');
		}
	}

	retireUntillYear(1998,'Renil');
	retireUntillYear(2001,'Shreyash');
	retireUntillYear(1950,'Jone');

/*
*************** Function Statement & Expression **********************
*/
	// Function Declaration
	/*function whatDoYouDo(job,name) 
	{
		// body...
	}
*/
	// Function Expression
	var whatDoYouDo = function(job,name)
	{
		switch(job)
		{
			case 'teacher':
				return name + ' is teacher';
			case 'driver':
				return name + ' is driver';
			case 'employee':
				return name + ' is employee';
			default:
				return name + ' is something else';
		}
	}

	console.log(whatDoYouDo('teacher','Renil'));
	console.log(whatDoYouDo('abc','Renil'));
	console.log(whatDoYouDo('driver','Renil'));

/*
*************** Arrays **********************
*/

	// Initialize New Array

	var names = ['Renil','Vaibhav','Rajan','Ravi','Raj'];
	var ages = new Array(20,21,22,23,24);

	console.log(names.length);
	console.log(names[3]);
	console.log(ages[3]);

	// Mutate Array

	names[2] = 'Rajan Soni';
	console.log(names);

	names[names.length] = 25;
	console.log(names);

	// Different Data Type

	var renil = ['Renil','Soni',23,'Ahm','Trainee'];

	renil.push('Cybercom'); // Add value into last index of array
	console.log(renil);
	renil.unshift('Mr.'); // Add value in first index of array
	console.log(renil);

	renil.pop(); //Delete from ending index
	renil.shift(); // Delete from starting index
	console.log(renil);

	console.log(renil.indexOf('Soni')); // return index of Soni

	console.log(renil.indexOf(21)); // not find from array so return -1 

	var isRenil = names.indexOf('Renil') === -1 ? 'This is not Renil' : 'This is Renil'; // if index is -1 then not a renil

	console.log(isRenil);

