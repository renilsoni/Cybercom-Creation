<?php

    // Index Array

    $names = array('Renil','Vaibhav','Rajan','Ravi','Shraddha','Ratan');
    print_r($names);

    $names[6] = 'Mitul'; // Add value to the specific position
    print_r($names);
    echo '<br>';

    echo sizeof($names); // get the length of array
    echo '<br>';

    for ($i=0; $i < sizeof($names); $i++){ 
        if($i % 2 == 0){
            echo $names[$i].'<br>';
        }
    }

    echo '<br><br>';

    // Associated Array

    $names = array('Renil' => 23,'Vaibhav' => 22,'Rajan' => 21,'Ravi' => 26,'Shraddha'  => 24,'Ratan' => 25);
    print_r($names);
    echo '<br>';

    foreach($names as $i => $value){
        echo 'Name : '.$i.' Age : '.$value.'<br>';
    }
    echo '<br><br>';

    // Multi - Dimention Array

    $cars = array(array('Swift',15,20),array('Alto',16,19),array('i20',19,22),array('i10',20,25));

    echo $cars[0][0].'<br>'; // Print Particular Value
    echo $cars[1][0].'<br>';  
    
    for ($i=0; $i < count($cars) ; $i++){ 
        for ($j=0; $j < count($cars) - 1; $j++){ 
            echo $cars[$i][$j].'&nbsp;';
        }
        echo '<br>';
    }
    echo '<br><br>';

    // For each 

    $names = array('Renil' => array(23,'Trainee'),'Vaibhav' => array(22,'Trainee'),'Ravi' => array(26,'BusinessMan'));

    foreach($names as $key => $value){
        echo $key;
        foreach($value as $val){
            echo " ".$val." ";
        }
        echo '<br>';
    }

?>