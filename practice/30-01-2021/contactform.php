<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    if(!empty($name) && !empty($email) && !empty($subject)) {
        if(strlen($name) > 25 && strlen($email) > 50 && strlen($subject) > 1000) {
            echo 'Max Length Exceeds';
        } else {
            $to = $email;
            $subject_mail = 'Contact Form Submitted';
            $message = $name."\n".$subject;
            $header = 'From: "Renil Soni" <sonirenil52@gmail.com>';

            if (mail($to,$subject,$message,$header)) {
                echo "Thanks For Conatcting Us.";
            } else {
                echo "Sorry, an error occurred. Please try again later";
            }
        }
    } else {
        echo 'Please Fill All Details !!';
    }
}

?>
<h2>Contact Form</h2> 
<form action="" method="POST">

Name : <br>
<input type="text" name="name" maxlength="25"><br><br>

Email : <br>
<input type="email" name="email" maxlength="50"><br><br>

Subject : <br>
<textarea name="subject" cols="30" rows="6" maxlength="1000"></textarea><br><br>

<input type="submit" value="Submit" name="submit">

</form>