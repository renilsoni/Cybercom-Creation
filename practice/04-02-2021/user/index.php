<?php

require 'dbconnect.inc.php';
require 'core.inc.php';

if (loggedin()) {
    $firstname = getfields('firstname');
    $lastname = getfields('lastname');
    echo "You Are Logged In, <strong>".$firstname." ".$lastname."</strong> <a href='logout.php'>Logout</a><br>";
    
} else {
    include 'login.inc.php';
}



//echo $current_file;

?>