<?php

if (isset($_GET['fname']) && isset($_GET['fname']) && isset($_GET['fname'])) {
    $fname = $_GET['fname'];
    $mname = $_GET['mname'];
    $lname = $_GET['lname'];

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