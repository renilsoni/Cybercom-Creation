<?php
$offset = 0;
$string = 'this is a book, it is wonderful';
$find = 'is';

echo strpos($string,$find).'<br>'; // it is print position of first 'is'
echo strpos($string,$find,4).'<br>'; // it is print position of after 4 character 'is'
echo strpos($string,$find,10).'<br>'; // it is print position of after 10 character 'is'

while($string_position = strpos($string,$find,$offset)){
    echo $find.' found at '.$string_position.'<br>';
    $offset = $string_position + 2;
}

?>