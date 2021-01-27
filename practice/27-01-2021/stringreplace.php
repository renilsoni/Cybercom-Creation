<?php
    
$string = "I am a renil";

$new_string = substr_replace($string,'Renil Soni',7);

echo $new_string;

echo '<br><br>';

$find = ['is','php'];
$replace = ['IS','PHP'];
$string = 'This is a php,it is an example';

$new_string = str_replace($find,$replace,$string);

echo $new_string;

?>