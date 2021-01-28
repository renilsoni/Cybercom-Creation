<?php

    $find = array('renil','vaibhav','rajan');
    $replace = array('r***l','v*****v','r***n');

    if (isset($_POST['input']) && !empty($_POST['input'])) {
        $string = $_POST['input'];
        //$string_lower = strtolower($string);
        $new_string = str_ireplace($find,$replace,$string); // this method not find uppercase and lowercase if find same words then replace it.
        echo $new_string;
    }

?>

<hr>

<form action="#" method="POST">
    <textarea name="input" cols="30" rows="6"></textarea><br><br>
    <input type="submit" value="Submit">
</form>