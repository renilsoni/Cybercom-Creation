<?php

session_start();

// $_SESSION['name'] = 'Renil';

$_SESSION['username'] = 'Renil';
$_SESSION['age'] = 23;

print_r($_SESSION); // display session details

// Cookies

setcookie('username','Soni',time()+1000); 

setcookie('username','Soni',time()-1000); // unset the cookies

?>