/* =============== Classes ================ */

    // ES5

    // var Person5 = function(name,year,job)
    // {
    //     this.name = name;
    //     this.year = year;
    //     this.job = job;
    // }

    // Person5.prototype.calcAge = function()
    // {
    //     var age = new Date().getFullYear() - this.year;
    //     console.log(age);
    // }

    // var renil = new Person5('Renil',1998,'Trainee');

    // ES6

    // class Person6
    // {
    //     constructor(name,year,job) // Constructor
    //     {
    //         this.name = name;
    //         this.year = year;
    //         this.job = job;
    //     }

    //     calculateAge() // class related method
    //     {
    //         var age = new Date().getFullYear() - this.year;
    //         console.log(`Hello ${age}`);
    //     }

    //     static hello()
    //     {
    //         console.log('Hello EveryOne !!');
    //     }
    // }

    // const vaibhav = new Person6('Vaibhav',1997,'Trainee');    
    // vaibhav.calculateAge();
    // // vaibhav.hello(); // Not a function bcoz of its static thats why used Class Object not a instance

    // Person6.hello(); // Call static method using class object


/* =============== Classes & SubClasses ================ */

    // ES5

    var Person5 = function(name,year,job)
    {
        this.name = name;
        this.year = year;
        this.job = job;
    }

    Person5.prototype.calcAge = function()
    {
        var age = new Date().getFullYear() - this.year;
        console.log(age);
    }

    var Athelet5 = function(name,year,job,olympicGames,medals)
    {
        Person5.call(this,name,year,job);
        this.olympicGames = olympicGames;
        this.medals = medals;
    }

    Athelet5.prototype = Object.create(Person5.prototype);

    Athelet5.prototype.wonMedal = function()
    {
        this.medals+=2;
        console.log(this.medals);
    }

    var renilAthelet = new Athelet5('Renil',1998,'Trainne',3,5);
    renilAthelet.wonMedal();
    renilAthelet.calcAge();

    // ES6

    class Person6
    {
        constructor(name,year,job) // Constructor
        {
            this.name = name;
            this.year = year;
            this.job = job;
        }

        calculateAge() // class related method
        {   
            var age = new Date().getFullYear() - this.year;
            console.log(age);
        }
    }

    class Athelet6 extends Person6
    {
        constructor(name,year,job,olympicGames,medals)
        {
            super(name,year,job);
            this.olympicGames = olympicGames;
            this.medals = medals;
        }

        wonMedals()
        {
            this.medals += 2;
            console.log(this.medals);
        }
    }

    var renilAthelet6 = new Athelet6('Renil',1998,'Trainee',3,5);

    renilAthelet6.wonMedals();
    renilAthelet6.calculateAge();