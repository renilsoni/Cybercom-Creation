<?php

include '../../01-02-2021/database.php';

if (isset($_POST['submit'])) {
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
        if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['subject']) && empty($_POST['message'])) {
            echo "Please Fill All Fields !!";
        } else {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
    
            $sql = "insert into form4data (name,email,subject,message) VALUES 
                    ('".$name."','".$email."','".$subject."','".$message."')";

            if(mysqli_query($conn,$sql)) {
                echo "Record Inserted Successfully";
            } else {
                echo "Record Not Inserted";
            }
        }
    } else {
        echo "Please Fill All Fields !!";
    }
}

?>

<br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
    <style>
        .div1
        {
            text-align : center;
            width : 35%;
            background-color : #d66406;
            border-radius : 7px 7px 0px 0px;
            padding : 3px 0px 3px;
            color : white;
        }
        .div2
        {
            width : 35%;
            background-color : #f2af77; 

            text-align : center;

        }
        .div3
        {
            width : 35%;
            background-color : #d66406;
            border-radius : 0px 0px 7px 7px;  
        }
        input[type=submit] 
        {
            background-color: #F8CC37;
            width: 100%;
            color: #4C2915;
            border: 0;
            font-size: 28px;
            padding: 15px;
            border-radius : 0px 0px 7px 7px;  

        }
        input[type=text],input[type=email],textarea 
        {
            width : 95%;
            padding : 5px;  
            margin : 10px;
        }
        .error 
        {
            color : red;
        }
    </style>
</head>
<body>
<form action="form4.php" method="POST">
    <div align='center'>
        <div class='div1'>
            <h1>CONTACT US</h1>
        </div>

        <div class='div2'>
            <input type="text" name="name" id="name" placeholder="Name..."><span id="nameerror"></span>
            <input type="email" name="email" id="email" placeholder="Email..."><span id="emailerror"></span>
            <input type="text" name="subject" id="subject" placeholder="Subject..."><span id="subjecterror"></span>
            <textarea name="message" id="message" cols="30" rows="6" placeholder="Message..."></textarea><span id="messageerror"></span>
        </div>

        <div class='div3'>
            <input type="submit" name="submit" id="submit" value="Submit" onclick='return validateform()'>
        </div>
    </div>
</form>
</body>
<script src="form4.js"></script>
</html>

