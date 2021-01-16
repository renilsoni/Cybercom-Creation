var teamJohn = [89,120,103];
var teamMike = [116,94,123];

function calculateAvgScore(teamScore) 
{
	return teamScore[0] + teamScore[1] + teamScore[2];
}

var avgScoreJohn = calculateAvgScore(teamJohn);
var avgScoreMike = calculateAvgScore(teamMike);

if (avgScoreJohn > avgScoreMike) 
{
	console.log("John Team Won The Match With "+ avgScoreJohn + " Scores.");
}
else if(avgScoreJohn < avgScoreMike)
{
	console.log("Mike Team Won The Match With "+ avgScoreMike + " Scores.");
}
else
{
	console.log("Match Draw !!");
}

teamJohn = [103,150,101]; // new score of John Team
teamMike = [101,98,102]; // new Score of Mike Team

avgScoreJohn = calculateAvgScore(teamJohn); // new average score of john
avgScoreMike = calculateAvgScore(teamMike); // new average score of Mike

if (avgScoreJohn > avgScoreMike) 
{
	console.log("John Team Won The Match With "+ avgScoreJohn + " Scores.");
}
else if(avgScoreJohn < avgScoreMike)
{
	console.log("Mike Team Won The Match With "+ avgScoreMike + " Scores.");
}
else
{
	console.log("Match Draw !!");
}


var teamMary = [97,134,105]; // score of Mary Team
var avgScoreMary = calculateAvgScore(teamMary); // Average Score of Mary

if (avgScoreJohn == avgScoreMike && avgScoreMike == avgScoreMary) 
{
	console.log("Match Draw !!");
}
else if(avgScoreJohn > avgScoreMike && avgScoreJohn > avgScoreMary)
{
	console.log("John Team Won The Match With "+ avgScoreJohn + " Scores.");
}
else if (avgScoreMike > avgScoreMary)
{
	console.log("Mike Team Won The Match With "+ avgScoreMike + " Scores.");
}
else
{
	console.log("Mary Team Won The Match With "+ avgScoreMary + " Scores.");
}