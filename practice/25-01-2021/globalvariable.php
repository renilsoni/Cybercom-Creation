<?php

$number = 20;

function add($number1){
    global $number; // Using global keyword to use global variable
    return $number + $number1;
}

echo add(10);
?>