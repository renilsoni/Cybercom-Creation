<?php

function add($number1,$number2){
    $ans = $number1 + $number2;
    return $ans;
}

function divide($number1,$number2){
    $ans = $number1 / $number2;
    return $ans;
}

echo add(10,10);

echo '<br><br>';

echo divide(add(20,20),add(5,5));

?>