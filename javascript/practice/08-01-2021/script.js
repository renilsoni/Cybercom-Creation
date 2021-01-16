/*
*************** Variables & DataTypes **********************
*/


	console.log("Hello JavaScript");

	var firstName = 'Renil';
	var age = 22;
	var isTrainee = true;
	var weight = 55.5;
	console.log(firstName);

/*
*************** Type Coercion **********************
*/

	// console.log("FirstName : "+firstName+" Age : "+age+" Trainee : "+isTrainee+" Weight : "+weight
	// 	);
	// document.write(firstName);

/*
*************** Variables Mutation **********************
*/

	// age = 'Twenty Two';
	// weight = 56;

	// var lastName = prompt('What is Your LastName ??');

	// alert(firstName + " " + lastName);

	// document.write("<h2>"+firstName+ " " + lastName + "</h2>");
	// alert("FirstName : "+firstName+" Age : "+age+" Trainee : "+isTrainee+" Weight : "+weight
	// 	);

/*
*************** Basic Operators **********************
*/

	var no1 = 25;
	var no2 = 5;
	var name = "Renil";
	var age;

	//Math Operator

	console.log(no1 + no2);
	console.log(no1 - no2);
	console.log(no1 * no2);
	console.log(no1 / no2);

	//Typeof Operator

	console.log(typeof(no1));
	console.log(typeof(name));
	console.log(typeof(age));

	// Logical Operator

	var isGreater = no1 > no2;
	console.log(isGreater); // True


/*
*************** Operator Precedence **********************
*/

	var now = 2020;
	var yearRenil = 1998;
	var fullAge = 20;
	var ageVm = 21; 

	//Multiple Operator

	var isFullAge = now - yearRenil >= fullAge; // 22 > 20
	console.log(isFullAge); //True

	//Grouping Operator

	var avg = ((now-yearRenil) + ageVm) / 2;  //(22+21)/2 = 21.5
	console.log(avg);

	//Multiple Assignment

	var a,b;

	a = b = (5 * 2) + 4 - 5; // 10+4-5 // 14-5 // 9

	console.log(a,b);
	console.log(b);

	// More Operator

	var x = 5;
	x = x * 2;
	console.log(x);
	x *= 2;
	console.log(x);

	x = x + 1;
	console.log(x);

	x--;
	console.log(x);


