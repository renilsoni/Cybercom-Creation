/* ======== 4. Execution Contexts in Detail Creation and Execution Phases and Hoisting =======

	* Execution Context Object
		1. Variable Object
		2. Scope Chain
		3. "this" variable.

	* There are two phase of Execution :-
		1. Creation Phase :-
			I. Creation Of Variable Object.
			II. Creation Of Scope Chain.
			III. Value Of "this" Variable.

		2. Execution Phase :-
			The code of funcution generate current execution context line by line.

	* The argument object is created, containing all the arguments that passes into function.

	* Code scanned for function declarations : each function property created in Variable Object.

	* Code scanned for variable declarations : each variable property created in Variable Object. 
	  set to undefined.

	* Last 2 points called Hoisting.

	* Function is already declared before execution phase start.
	* Variable set to undefined before execution phase start. 


====================================================================================*/

/* =============== Hoisting =================*/

	// Function 
	
	calculateAge(1990); // Function return the same execution before the Declaration 

	function calculateAge(year) //Function Declaration
	{
		console.log(2021 - year);
	}

	calculateAge(1998); // Function return the same execution after the Declaration 

	// Not necessary to first declare function and then execute it. you can execute first and then declare function.

	// retire(1999); // it is not a function bcoz this treat as variable.

	var retire = function(year) // Function Expression
	{
		console.log(65 - (2021 - year));
	}
 	
 	retire(1998); // this right bcoz calling function after declaration.

 	// In Function Expression,when you call a function before declaration it get an error not a function
 	// when you call after declaration it work properly.


 	// Variable

 	console.log(age); // it will return undefined bcoz of its not declare before print.
 	var age = 22; // it is global variable
 	console.log(age); // it will return 22 bcoz of its define after declare.

 	function printAge()
 	{
 		var age = 65; // its scope definr for the function only.
 		console.log(age); // so its print 65
 	}
 	printAge(); // its print 65
 	console.log(age); // its print 22 bcoz in this age is global variable.


 /* =========== 6. Scoping and the Scope Chain ================*/

 	// Scoping

   
 	// * Lexical Scoping :- it is function within another function get access to the scope of outer function.
 	var a = 10;
 	abc(); 

 	function abc()
 	{
 		var b = 25;
 		console.log(b); 
 	}

 	function pqr() // its access global variable & its own variable
 	{
 		var d = 5;
 		console.log(a+d);
 	}
 	abc();

 /* ================= This keyword ================= */

 	var renil = 
 	{
 		name : 'Renil',
 		year : 1998,
 		calculateAge : function()
 		{
 			console.log(this);
 			console.log(2021 - this.year);

 			// function inner()
 			// {
 			// 	console.log(this);
 			// }
 			// inner();
 		}
 	}

 	renil.calculateAge();


 	var vaibhav = 
 	{
 		name : 'Vaibhav',
 		year : '1996',
 		calculateAge
 	}

 	vaibhav.calculateAge = renil.calculateAge;
 	vaibhav.calculateAge();


/* ================== 9. Objects and Properties =============== */

	var renil = 
	{
		firstName : 'Renil',
		lastName : 'Soni',
		year : 1998,
		city : 'Radhanpur',
		hobby : ['Cricket','Music','Movie'],
		mno : 9858745625
	};

	console.log(renil);
	console.log(renil.lastName);
	console.log(renil.hobby);
	console.log(renil.hobby.push('ABC'));
	console.log(renil.hobby);
	console.log(renil['city']);
	var x = 'mno';
	console.log(renil[x]);

	renil.year = 1999;
	console.log(renil);
	renil['year'] = 2000;
	console.log(renil);

	var vaibhav = new Object();
	vaibhav.name = 'Vaibhav';
	vaibhav.city = 'Deesa';
	vaibhav.hobby = ['Cricket','Music','Movie'];

	console.log(vaibhav);


/* ============= 10. Objects and Methods ===============*/

	var renil = 
	{
		firstName : 'Renil',
		lastName : 'Soni',
		year : 1998,
		city : 'Radhanpur',
		hobby : ['Cricket','Music','Movie'],
		mno : 9858745625,
		calAge : function()
		{
			this.age = 2021 - this.year;
			//console.log(2021-year);
		}
	};

	renil.calAge();
	console.log(renil);

/* ============ Loops ===================*/

	// For Loop 
	for (var i = 1; i <= 10; i++) 
	{
		console.log(i);
	}

	var renil = ['renil','soni','radhanpur',1998,'MSCIT',false,9852369856];

	for (var i = 0; i < renil.length; i++) 
	{
		console.log(renil[i]);
	}

	// While Loop

	var i = 1;
	while(i <= 10)
	{
		console.log(i);
		i++;
	}

	var x = 0;

	while(x < renil.length)
	{
		console.log(renil[x]);
		x++;
	}

	// Continue & Break Statement

	var renil = ['renil','soni','radhanpur',1998,'MSCIT',false,9852369856];

	for (var i = 0; i < renil.length; i++) 
	{
		if (typeof renil[i] !== 'string') 
		{
			continue; // continue loop when condition true nd skip this step.
		}
		console.log(renil[i]);
	}

	for (var i = 0; i < renil.length; i++) 
	{
		if (typeof renil[i] !== 'string') 
		{
			break; // break the loop when condition is true, further not execute.
		}
		console.log(renil[i]);
	}

	// Loop Backwarding

	var renil = ['renil','soni','radhanpur',1998,'MSCIT',false,9852369856];

	for (var i = renil.length - 1; i >= 0; i--) 
	{
		console.log(renil[i]);
	}