var tips = [];
var finalTotal = [];

var bills = [124,48,268];

function calculateTips(billAmount) 
{
	var tip,total;
	if (billAmount < 50) 
	{
		tip = billAmount * (20/100);
		total = billAmount + tip;
		tips.push(tip);
		finalTotal.push(total);
	}
	else if(billAmount >= 50 && billAmount <= 200)
	{
		tip = billAmount * (15/100);
		total = billAmount + tip;
		tips.push(tip);
		finalTotal.push(total);
	}
	else
	{
		tip = billAmount * (10/100);
		total = billAmount + tip;
		tips.push(tip);
		finalTotal.push(total);
	}
}

for(var i = 0; i <= bills.length - 1; i++)
{
	calculateTips(bills[i]);
}

console.log("Tips Array : "+tips);
console.log("Final Total Array : "+finalTotal);

