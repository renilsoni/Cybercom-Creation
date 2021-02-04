<?php

require 'database.php';

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    $sql = "SELECT name FROM people WHERE name LIKE '%".mysqli_real_escape_string($conn,$name)."%'";
    $result = mysqli_query($conn,$sql);
    $count_row = mysqli_num_rows($result);

    if($count_row >= 1) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row['name']."<br>";
        }
    } else {
        echo "No Record Found";
    }
} else {
    echo "Please Enter Name !!";
}

?>

<form action="" method="POST">
    <input type="text" name="name" id="name"><br><br>
    <input type="submit" value="submit">
</form>