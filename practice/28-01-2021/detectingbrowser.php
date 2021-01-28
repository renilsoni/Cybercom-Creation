<?php

$browser = get_browser(null, true);
//print_r($browser);
//echo $browser['browser'];

if (strtolower($browser['browser']) != 'chrome') {
    echo 'You\'r Not using Chrome. Please Do!.';
}
?>