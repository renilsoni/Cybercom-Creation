<?php

$xml = simplexml_load_file('example.xml');

//echo $xml->student[1]->name.' is '.$xml->student[1]->age;

foreach ($xml->student as $data) {
    echo $data->name.' is '.$data->age.'<br>';
    foreach($data->detail as $detail) {
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$detail->city.' '.$detail->mno.'<br>';
    }
}

?>