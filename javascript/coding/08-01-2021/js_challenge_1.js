var massMark,massJohn,heightMark,heightJohn,bmiMark,bmiJohn;

massMark = 55; //in KG
massJohn = 60; //in KG

heightMark = 1.5; //in Meter
heightJohn = 1.6; //in Meter

bmiMark = massMark / (heightMark * heightMark);

bmiJohn = massJohn / (heightJohn * heightJohn);

console.log (bmiMark , bmiJohn);

var isHigher = bmiMark > bmiJohn ;

console.log("Is Mark's BMI higher than John's ? " +isHigher)
