<?php

if (isset($_GET['fname']) && isset($_GET['fname']) && isset($_GET['fname'])) {
    $fname = htmlentities($_GET['fname']);
    $mname = htmlentities($_GET['mname']);
    $lname = htmlentities($_GET['lname']);

    if (!empty($fname) && !empty($mname) && !empty($lname)) {
        echo $fname.' '.$mname.' '.$lname;
    } else {
        echo 'Please Fill All Fields !!';
    }
}

?>

<form action="" method="GET">
FirstName : <br>
<input type="text" name="fname"><br><br>
MiddleName : <br>
<input type="text" name="mname"><br><br>
LastName : <br>
<input type="text" name="lname"><br><br>
<input type="submit" value="Submit">
</form>