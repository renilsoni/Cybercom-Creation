<?php

$num1 = 10;
$num2 = 20;

function add($number1,$number2){
    echo $number1+$number2;
}

add($num1,$num2);

echo '<br><br>';

// Function of Factorial

function fact($number){
    $ans = 1;
    for($i = 1; $i <= $number; $i++)
    {
        $ans = $ans * $i;
    }
    echo $ans;
}

fact(4);

?>