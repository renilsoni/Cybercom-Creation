<?php

$to = "sonirenil52@gmail.com";
$subject = "Welcome to Cybercom";
$msg = "This is test Mail";
$header = 'From: "Renil" <sonirenil1512@gmail.com>';

if (mail($to,$subject,$msg,$header)) {
    echo 'Mail Sent Successfullt To <strong>'.$to.'</strong>';
} else {
    echo 'Error';
}

?>