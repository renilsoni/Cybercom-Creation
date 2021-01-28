<?php

require 'getipaddress.php';

foreach ($ip_blocked as $ip) {
    if ($ip_address == $ip) {
        echo 'Your IP Address '.$ip_address.' Has been Blocked !!';
    }
}

?>