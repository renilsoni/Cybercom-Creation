<?php

@$name = $_FILES['file']['name'];
$extention = strtolower(substr($name,strpos($name,'.')+1));
@$size = $_FILES['file']['size'];
@$type = $_FILES['file']['type'];
@$tmp_name = $_FILES['file']['tmp_name'];

$max_size = 100000;

//echo $name.'<br>'.$size.'<br>'.$type.'<br>'.$tmp_name.'<br>'.$extention;

if(isset($name)) {
    if (!empty($name)) {
        if (($extention == 'jpg' || $extention == 'jpeg') && ($type == 'image/jpg' || $type == 'image/jpeg')) {
            if($size <= $max_size) {
                $location = 'uploads/';
                if (move_uploaded_file($tmp_name,$location.$name)) {
                    echo 'Uploaded Successfully';
                } else {
                    echo "Error";
                }
            } else {
                echo 'File Size Must Be Less OR 1 MB !';
            }
        } else {
            echo 'File Type Must Be JPG/JPEG !';
        }
    } else {
        echo 'Please Select File !!';
    }
}

?>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" value="Submit">
</form>