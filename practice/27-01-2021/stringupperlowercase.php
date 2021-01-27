<?php

// $string = 'My Name is Renil';

// echo strtolower($string).'<br>';
// echo strtoupper($string);

if(isset($_GET['name'])){
    echo $username = $_GET['name'];
    $username_lower = strtolower($username);

    if($username_lower == 'vaibhav'){
        echo '<br>My Name is '.$username_lower; 
    }

}

?>

<form action="#" method="GET">
Name : <input type="text" name="name" id="name"><br><br>
<input type="submit" name="submit" value="Submit">
</form>