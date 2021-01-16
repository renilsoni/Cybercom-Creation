mark =
{
	name : 'Mark',
	mass : 55, // in kg
	height : 1.5, // in meter
	calculateBMI : function()
	{
		var bmi = this.mass / (this.height * this.height);
		return bmi;
	}
};

john = 
{
	name : 'Mark',
	mass : 60, // in kg
	height : 1.6, // in meter
	calculateBMI : function()
	{
		var bmi = this.mass / (this.height * this.height);
		return bmi;
	}
};

if (mark.calculateBMI() == john.calculateBMI()) 
{
	console.log("Mark's & John's BMI Same");
}
else if(mark.calculateBMI() > john.calculateBMI())
{
	console.log("Mark's BMI Higher " + mark.calculateBMI().toFixed(2));
}
else
{
	console.log("John's BMI Higher " + john.calculateBMI().toFixed(2));
}