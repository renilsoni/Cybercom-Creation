<?php

$string ='Welcome to Cybercom Creation';

if(preg_match('/Creation/',$string)){
    echo 'Found';
}
else{
    echo 'Not Found';
}

echo '<br><br>';

$number = 1234567890;

if(preg_match('/9/',$number)){
    echo 'Found';
}
else{
    echo 'Not Found';
}

?>