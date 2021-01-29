<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Registration Form</title>
</head>
<body>

<?php

$name = ""; 
$errName = "";
$email = "";
$errEmail = "";
$gender = "";
$errGender = "";
$time = "";
$errTime = "";
$address = "";
$errAddress = "";
$subject = "";
$errSubject = "";
$agree = "";
$errAgree = "";

if (isset($_POST['submit'])) {
    if(empty($_POST['name'])) {
        $errName = 'Name is required !!';
    } else {
        $name = $_POST['name'];
    }
    if(empty($_POST['email'])) {
        $errEmail = 'Email is required !!';
    } else {
        $email = $_POST['email'];
    }
    if(empty($_POST['gender'])) {
        $errGender = 'Gender is required !!';
    } else {
        $gender = $_POST['gender'];
    }
    if(empty($_POST['time'])) {
        $errTime = '';
    } else {
        $time = $_POST['time'];
    }
    if(empty($_POST['address'])) {
        $errAddress = '';
    } else {
        $address = $_POST['address'];
    }
    if(empty($_POST['agree'])) {
        $errAgree = 'You must agree to terms';
    } else {
        $agree = $_POST['agree'];
    }
    if(empty($_POST['subject'])) {
        $errSubject = '';
    } else {
        $subject = $_POST['subject'];
    }
}

?>

    <br>
    <span class="error">* required field</span><br>
    <span class="error">* You must agree to terms</span>
 
    <form action="" method="POST">
    <br>
        <table>
            <tr>
                <td>Name : </td>
                <td>
                    <input type="text" name="name">
                    <span class="error">* <?php echo $errName; ?></span>
                </td>
            </tr>
            <tr>
                <td>Email : </td>
                <td>
                    <input type="email" name="email">
                    <span class="error">* <?php echo $errEmail; ?></span>
                </td>
            </tr>
            <tr>
                <td>Time : </td>
                <td>
                    <input type="text" name="time">
                </td>
            </tr>
            <tr>
                <td>Address : </td>
                <td>
                    <textarea name="address" cols="30" rows="7"></textarea>
                </td>
            </tr>
            <tr>
                <td>Gender : </td>
                <td>
                    <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <span class="error">* <?php echo $errGender; ?></span>
                </td>
            </tr>
            <tr>
                <td>Select : </td>
                <td>
                    <select name="subject[]" size = "4" multiple>
                        <option value="Android">Android</option>
                        <option value="Java">Java</option>
                        <option value="Database">Database</option>
                        <option value="C++">C++</option>
                        <option value="C">C</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Agree : </td>
                <td>
                    <input type="checkbox" name="agree" value="1">
                    <?php if(!isset($_POST['agree'])) { ?>                   
                    <span class="error">* <?php echo $errAgree; ?></span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['time']) && !empty($_POST['address']) && !empty($_POST['gender']) && !empty($_POST['subject']) && !empty($_POST['agree'])) {
        echo "<h2>Your given values are as :</h2>";
        echo ("<p>Your name is : $name</p>");
        echo ("<p> your email is : $email</p>");
        echo ("<p>Your time at : $time</p>");
        echo ("<p>your address is : $address </p>");
        echo ("<p>your gender is : $gender</p>");
        echo ("your subject is : ");

        foreach ($subject as $sub) {
            echo $sub.',';
        }

    
    }

?>

