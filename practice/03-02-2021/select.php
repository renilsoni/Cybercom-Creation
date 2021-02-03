<?php

    require 'database.php';

?>

<form action="" method="GET">
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

    <input type="submit" value="submit" value="Submit">
</form>

<?php
if(isset($_GET['age']) && !empty($_GET['age'])) {
    $age = $_GET['age'];
} else {
    echo "Please Select Age";
}

$sql = "SELECT `name`,`address`,`gender` FROM `form1data` WHERE `age` = '".$age."' ORDER BY `id`";

if ($query = mysqli_query($conn,$sql)) { // execute query nd save result into query variable
    if($query -> num_rows == NULL) { // check number of rows
        echo "No Record Found";
    } else {
        //print_r($query);
        //echo "Query Success";
        while ($row =$query -> fetch_assoc()) { // fetch one by one array from row variable 
            //echo '<pre>';
            //print_r($row);
            echo "Name : ".$row['name']." Address : ".$row['address']." Gender : ".$row['gender'].'<br>';
        }
    }
} else {
    echo mysqli_error($conn);
}

?>