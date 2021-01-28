<?php

// $random = rand();
// echo $random.'<br>';

// $max = getrandmax();
// echo $max;
 
// //echo gettype($max);

if (isset($_POST['roll'])) {
    $rand = rand(1, 6);
    echo 'Number :- '.$rand;
}
?>

<form action="#" method="post">
    <input type="submit" value="Roll" name="roll">
</form>