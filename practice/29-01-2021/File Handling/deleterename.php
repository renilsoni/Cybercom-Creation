<?php
// Delete File

$filename = 'deletefile.txt';

if(@unlink($filename)) {
    echo 'File <u>'.$filename.'</u> Has Been Deleted.';
} else {
    echo 'File Can\'t Be Deleted.';
}

echo '<br><br>';
// Rename File

$filename = '44918.txt';
$rand = rand(10000,99999);

if(@rename($filename,$rand.'.txt')) {
    echo 'File <u>'.$filename.'</u> Has Been Renamed To '.$rand.'.txt';
} else {
    echo 'File Can\'t Be Renamed.';
}

?>