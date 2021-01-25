<?php

$string = "Hello & This is practice of string function";

echo '<h3> String Word Count Function </h3>';
//print number of word in string

$word_count = str_word_count($string,0); 
echo $word_count.'<br>'; // print number of word in string
print_r($word_count);

echo '<br><br>';

$word_count = str_word_count($string,1); 
print_r($word_count); // print array of word

echo '<br><br>';

$word_count = str_word_count($string,2); 
print_r($word_count); // give starting position of each word 

echo '<br><br>';

// in this function third argument Specifies special characters to be considered as words.

$word_count = str_word_count($string,1,"&"); 
print_r($word_count); 





echo '<h3> String Shuffle Function </h3>';

$string = "Welcome To Cybercom Creation";
$string1 = "abcdefghijkl0123456789";

$shuffle_string = str_shuffle($string1);

echo $shuffle_string; // print Shuffled String

echo '<br><br>';

$sub_string = substr($shuffle_string,0,10);

echo $sub_string; //print the 10 character of string





echo '<h3> String Reverse Function </h3>';

$reverse_string = strrev($string); //print Reverse String

echo $reverse_string;

echo '<h3> String Similarity Function </h3>';

$string1 = 'This is PHP Practice';
$string2 = 'This is HTML Practice';

similar_text($string1,$string2,$result);

echo $result; // print similarity between two strings in percentage





echo '<h3> String Trim Function </h3>';

$string = "&nbsp; This is PHP";

$string_trim = trim($string);

// trim :- remove white space from both side
// ltrim :- remove white space from left side
// rtrim :- remove white space from right side

echo $string_trim;





echo '<h3> String AddSlash Function </h3>';

$string = 'This a <img src="image.jpg"> PHP';
$string1 = 'This a "Content" PHP';

$string_addslash = htmlentities(addslashes($string));

echo $string_addslash.'<br>'; // add slash into html tags

$string_addslash = addslashes($string1);

echo $string_addslash.'<br>'; // add slash into string

$string_addslash = addslashes($string1);

echo stripslashes($string_addslash)."<br>"; // remove the slash from string

echo chr(75); // return character of ASCII code


$string = "Renil";
echo sha1($string);

?>

<!--

1. chop() = remove character from right end side
    $string = "Good Morning";
    chop($string,"Morning"); 

2. chunk_split() = Split string after each character and adding specific symbol.
    chunk_split($string,2,".");

3. explode() = Break a string into an array. 
    explode(" ",$string);


-->

