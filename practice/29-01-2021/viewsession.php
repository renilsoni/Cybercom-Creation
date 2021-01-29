<?php

session_start();

//echo 'Welcome '.$_SESSION['name'];

if (isset($_SESSION['username']) && isset($_SESSION['age'])) {
    echo 'Welcome '.$_SESSION['username'].'. You Are ',$_SESSION['age'];
} else {
    echo 'Please Log In.';
}

echo '<br><br>';

echo 'Cookies Value : '.$_COOKIE['username'];

?>