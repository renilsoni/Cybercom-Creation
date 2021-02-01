<?php

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    echo "FirstName : ".$firstname.'<br>'; 
    echo "LastName : ".$lastname.'<br>'; 
    echo "D.O.B : ".$day.'-'.$month.'-'.$year.'<br>'; 
    echo "Gender : ".$gender.'<br>'; 
    echo "Email Address : ".$email.'<br>'; 
    echo "Phone : ".$phone.'<br>'; 
    echo "Password : ".$password.'<br>'; 
}

?>

<br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3</title>
    <style>
        table
        {
            width : 30%;
        }
        tbody 
        {
            background-color : black ;
        }
        thead,tfoot 
        {
            background-color : #bd9211;
        }
        tr,td
        {
            width : 350px;
            padding : 5px;
        }
        .error 
        {
            color : red;
        }
        label 
        {
            float : center;
            color : #bd9211;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <table align="center">
            <thead>
                <tr>
                    <td colspan="2"><b>SIGN UP</b></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><label for="firstname">FirstName : </label></td>
                    <td><input type="text" name="firstname" id="firstname"><span id="fnameerror"></span></td>
                </tr>
                <tr>
                    <td><label for="lastname">LastName : </label></td>
                    <td><input type="text" name="lastname" id="lastname"><span id="lnameerror"></span></td>
                </tr>
                <tr>
                    <td><label for="dob">Date Of Birth : </label></td>
                    <td>
                        <select name="day" id="day">
                            <option value="" selected disabled>Day</option>
                            <?php for ($i=1; $i < 31; $i++) { ?>
                                <option value="<?=$i?>"><?=$i?></option>
                            <?php } ?>          
                        </select>
                        <select name="month" id="month">
                            <option value="" selected disabled>Month</option>
                            <?php for ($i=1; $i < 13; $i++) { ?>
                                <option value="<?=$i?>"><?=$i?></option>
                            <?php } ?>          
                        </select>
                        <select name="year" id="year">
                            <option value="" selected disabled>Year</option>
                            <?php for ($i=1950; $i < 2020; $i++) { ?>
                                <option value="<?=$i?>"><?=$i?></option>
                            <?php } ?>          
                        </select>
                        <span id="doberror"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="gender">Gender : </label></td>
                    <td>
                        <input type="radio" name="gender" id="genderm" value="Male"> <label for="">Male</label>
                        <input type="radio" name="gender" id="genderf" value="Female"> <label for="">Female</label> <br>
                        <span id="gendererror"></span>
                    </td>
                </tr>
                <tr>    
                    <td><label for="email">Email Address : </label></td>
                    <td><input type="email" name="email" id="email"><br><span id="emailerror"></span></td>
                </tr>
                <tr>    
                    <td><label for="phone">Phone : </label></td>
                    <td><input type="text" name="phone" id="phone"><span id="phoneerror"></span></td>
                </tr>  
                <tr>
                    <td><label for="password">Password : </label></td>
                    <td><input type="password" name="password" id="password"><span id="passworderror"></span></td>
                </tr>
                <tr>
                    <td><label for="confirm password">Confirm Password : </label></td>
                    <td><input type="password" name="confirmpassword" id="confirmpassword"><span id="confirmpassworderror"></span></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="checkbox" name="agree" id="agree"><label> I Accept This Agreement </label><br><span id="agreeerror"></span></td>
                </tr>
            </tbody>
            <tfoot>
                <tr align="center">
                    <td  colspan="2"><input type="submit" name="submit" id="submit" value="Submit" onclick='return validateform()'> &nbsp;<input type="reset" name="clear" id="clear" value="Clear"></td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>
<script src="form3.js"></script>
</html>
