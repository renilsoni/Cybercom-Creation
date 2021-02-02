<?php

include '../../01-02-2021/database.php';

if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['game']) && isset($_POST['maritalstatus'])) {
        if (empty($_POST['name']) && empty($_POST['password']) && empty($_POST['gender']) && empty($_POST['address']) && empty($_POST['day']) && empty($_POST['month']) && empty($_POST['year']) && empty($_POST['game']) && empty($_POST['maritalstatus'])) {
            echo "Please Fill All Details";
        } else {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $game = $_POST['game'];
            $maritalstatus = $_POST['maritalstatus'];

            $dob = $day.'-'.$month.'-'.$year;
            $val = implode(" ",$game);

            $sql = "insert into form2data (firstname,password,gender,address,dob,game,maritalstatus) VALUES
                    ('".$name."','".$password."','".$gender."','".$address."','".$dob."','".$val."','".$maritalstatus."')";

            if(mysqli_query($conn,$sql)) {
                echo "Record Inserted Successfully.";
            } else {
                echo "Record Not Inserted.";
            }
        }
    } else {
        echo "Please Fill All Details";
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
        table,fieldset
        {
            background-color : lightblue;
            width : 69%;
        }
        tr,td
        {
            width : 350px;
            padding : 5px;
        }
        #name,#password,#age,textarea
        {
            float : center;
            width : 230px;
        }
        .error 
        {
            color : red;
        }
        label 
        {
            float : center;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
    <fieldset>
        <legend align="center">User Data</legend>
        <table align="center">
            <tr>
                <td><label for="firstname">FirstName : </label></td>
                <td><input type="text" name="name" id="name"><span id="nameerror"></span></td>
            </tr>
            <tr>
                <td><label for="password">Password : </label></td>
                <td><input type="password" name="password" id="password"><span id="passworderror"></span></td>
            </tr>
            <tr>
                <td><label for="gender">Gender : </label></td>
                <td>
                    <input type="radio" name="gender" id="genderm" value="M"> Male
                    <input type="radio" name="gender" id="genderf" value="F"> Female <br>
                    <span id="gendererror"></span>
                </td>
            </tr>
            <tr>    
                <td><label for="address">Address : </label></td>
                <td><textarea name="address" id="address" cols="30" rows="6"></textarea><span id="addresserror"></span></td>
            </tr>
            <tr>
                <td><label for="dob">D.O.B : </label></td>
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
                <td><label for="game">Select Games : </label></td>
                <td>
                    <input type="checkbox" name="game[]" id="hockey" value="Hockey"> Hockey 
                    <input type="checkbox" name="game[]" id="football" value="Football"> Football 
                    <input type="checkbox" name="game[]" id="cricket" value="Cricket"> Cricket 
                    <input type="checkbox" name="game[]" id="volleyball" value="Volleyball"> Volleyball 
                    <span id="gameerror"></span>
                </td>
            </tr>  
            <tr>
                <td><label for="status">Marital Status : </label></td>
                <td>
                    <input type="radio" name="maritalstatus" id="statusm" value="M"> Married 
                    <input type="radio" name="maritalstatus" id="statusu" value="U"> Unmarried <br>
                    <span id="statuserror"></span>
                </td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="checkbox" name="agree" id="agree">I Accept This Agreement <br><span id="agreeerror"></span></td>
            </tr>
            <tr align="center">
                <td  colspan="2"><input type="submit" name="submit" id="submit" value="Submit" onclick='return validateform()'> &nbsp;<input type="reset" name="clear" id="clear" value="Clear"></td>
            </tr>  
        </table>
    </fieldset>
    </form>
</body>
<script src="form2.js"></script>
</html>
