<?php

$ip_address = $_SERVER['REMOTE_ADDR'];
$ip_blocked = array('::1','127.1.1.127');
echo $ip_address;

echo '<pre>';
print_r($_SERVER);
?>


HTTP_HOST
HTTP_CONNECTION
HTTP_CACHE_CONTROL
HTTP_USER_AGENT