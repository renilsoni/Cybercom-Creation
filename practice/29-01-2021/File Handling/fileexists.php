<?php

$filename = 'file.txt';

if (file_exists($filename)) {
    echo 'File Already Exists.';
} else {
    $file = fopen($filename,'w');
    fwrite($file,'This File is file.txt');
    fclose($file);
}

?>