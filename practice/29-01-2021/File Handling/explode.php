<?php

$filename = 'names.txt';
$file = fopen($filename,'r');
$names = fread($file,filesize($filename));

$name_array = explode(',',$names);
print_r($name_array);

foreach($name_array as $name) {
    echo $name;
}

?>