

<br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
    <style>
        table
        {
            border : 1px solid black;
            background-color : lightblue;
        }
        tr,td
        {
            border : 1px solid black;
            width : 200px;
            padding : 5px;
        }
        #name,#password,#age,textarea
        {
            width : 230px;
        }
        .error 
        {
            color : red;
        }
    </style>
</head>
<body>
    <form action="displayform1.php" method="POST">
        <table>
            <tr align="center">
                <td colspan="2">User Data</td>
            </tr>
            <tr>
                <td>Enter Name : </td>
                <td><input type="text" name="name" id="name"><span id="nameerror"></span></td>
            </tr>
            <tr>
                <td>Enter Password : </td>
                <td><input type="password" name="password" id="password"><span id="passworderror"></span></td>
            </tr>
            <tr>    
                <td>Enter Address : </td>
                <td><textarea name="address" id="address" cols="30" rows="6"></textarea><span id="addresserror"></span></td>
            </tr>
            <tr>
                <td>Select Game : </td>
                <td>
                    <input type="checkbox" name="game[]" id="hockey" value="Hockey"> Hockey <br>
                    <input type="checkbox" name="game[]" id="football" value="Football"> Football <br>
                    <input type="checkbox" name="game[]" id="badminton" value="Badminton"> Badminton <br>
                    <input type="checkbox" name="game[]" id="cricket" value="Cricket"> Cricket <br>
                    <input type="checkbox" name="game[]" id="volleyball" value="Volleyball"> Volleyball <br>
                    <span id="gameerror"></span>
                </td>
            </tr>  
            <tr>
                <td>Gender : </td>
                <td>
                    <input type="radio" name="gender" id="genderm" value="Male"> Male
                    <input type="radio" name="gender" id="genderf" value="Female"> Female <br>
                    <span id="gendererror"></span>
                </td>
            </tr>
            <tr>
                <td>Select Age : </td>
                <td>
                    <select name="age" id="age">
                        <option value="" selected>Select Age</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                    </select>
                    <span id="ageerror"></span>
                </td>
            </tr>  
            <tr align="center">
                <td colspan="2"><input type="file" name="file" id="file"><span id="fileerror"></span></td>
            </tr>  
            <tr align="center">
                <td  colspan="2"><input type="submit" name="submit" id="submit" value="Submit" onclick='return validateform()'> &nbsp;<input type="reset" name="clear" id="clear" value="Clear"></td>
            </tr>  
        </table>
    </form>
</body>
<script src="form1.js"></script>
</html>
