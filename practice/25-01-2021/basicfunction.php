<?php

function firstFunc(){
    echo "This is a First Function";
}

function myName(){
    echo 'Renil';
}

firstFunc();

echo '<br><br>';

echo 'My Name is ';
myName();

echo '<br><br>';


function prime($number){
    for($i = 1; $i <= $number; $i++){
        $c = 0;
        for($j = 1; $j <= $i; $j++){
            if($i % $j == 0){
                $c++;
            }
        }
        if($c==2){
            echo $i.' It is Prime<br>';
        }
    }
}

prime(50);

echo '<br><br>';

function palindrome($number)
{
    $rev = 0;
    $original = $number;
    while(floor($number)){
        $reminder = $number % 10;
        $rev = $rev * 10 + $reminder;
        $number = $number / 10;
    }
    if($original === $rev){
        echo $original." is Palindrome";
    }
    else{
        echo $original." is Not Palindrome";
    }
}

palindrome(55);

?> 