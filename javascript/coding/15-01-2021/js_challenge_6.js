var first = 0;
var second = 1;
var ans = 0;

document.write(first + " "+ second);

for(var i = 2; i < 10; i++)
{
	ans = first + second;
	document.write(" " +ans+ " ");
	first = second;
	second = ans;
}