<?php 

echo 'Hello ';

//die("Error");

echo ' World';

echo '<br><br>';

// die stop the execution further and display message


@mysqli_connect('localhost','root','') or die('Could not connect to database !'); // @ is not show the error but show the die message
echo 'Connected';



?>
 