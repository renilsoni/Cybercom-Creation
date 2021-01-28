<?php

$time = time();
echo $time;

echo '<br><br>';

$real_time = date('H:i:s',$time);
echo $real_time;

echo '<br><br>';

$real_time = date('d-m-y @ H:i:s',$time);
echo $real_time;
echo '<br>';
$modified_time = date('d-m-y @ H:i:s',$time-30);
echo $modified_time;

echo '<br><br>';

$modified_time = date('d-m-y @ H:i:s',strtotime('+5 days')); // add +5 days
echo $modified_time;

echo '<br><br>';

$modified_time = date('d-m-y @ H:i:s',strtotime('+5 days 2 hours 10 minutes 10 seconds')); // add any day hours minutes seconds
echo $modified_time;

echo '<br><br>';

$modified_time = date('d-m-y @ H:i:s', strtotime('-7 days -2 hours -3 minutes -10 seconds')); // add any day hours minutes seconds
echo $modified_time;
?>