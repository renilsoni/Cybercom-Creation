<?php

$name_array = array('Khushbu','Dharmi','Chetna');
$names = implode("\n",$name_array);

$file = fopen('names.txt','a');

fwrite($file,$names);

fclose($file);

?>