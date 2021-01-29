<?php

//  

if(isset($_POST['name'])) {
    if(!empty($_POST['name'])) {
        $name = $_POST['name'];
        $file = fopen('names.txt','a');
        fwrite($file,$name."\n");
        fclose($file);

        $count = 1;
        $read = file('names.txt');
        $filecount = count($read);
        //echo $filecount;

        echo 'Names In File : ';

        foreach($read as $fname) {
            echo trim($fname);
            if($count<$filecount) {
                echo ', ';
            }
            $count++;
        }

    } else {
        echo "Please Enter Name !!";
    }
}

?>

<form action="" method="POST">
    Name : <br>
    <input type="text" name="name"><br><br>
    <input type="submit" value="Submit">
</form>
