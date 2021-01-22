<?php

    $name = 'Renil';
    $age = 23;

    if(strtolower($name) === 'renil')
    {
        echo '<strong>You Are '.$name.'.</strong><br>';
        if($age >= 18)
        {
            echo 'You are over 18';
        }
        else
        {
            echo 'Not over 18';
        }
    }
    else
    {
        echo 'You are not Renil';
    }
?>
<br><br>

<?php
    echo '<input type="text" name="name" id="name" value="Renil"><br><br>'; //using echo
    print '<input type="text" name="name" id="name" value="Renil"><br><br>'; // using print
    print "<input type=\"text\" name=\"name\" id=\"name\" value=\"Renil\"><br><br>"; // using backslash 

    $text = "Welcome To Cybercom";
?>

<input type="text" value="<?php echo $text; ?>"> <!-- PHP embeded in HTML -->

<?php

    ini_set('error_reporting',0);

    $text = "renil";
    $text1 = "abc"; // string

    $number = 10; // number
    $flag = true; // boolean

    echo $text.'<br>';
    echo $number.'<br>';
    echo $flag.'<br>';
    var_dump($flag);
?>
<br>
<br>

<?php

    $var = 'Hello';

    // IF Statement 

    if(0)
    {
        echo "True";
    }
    else
    {
        echo "false";
    }
    echo '<br>';

    if(true)
    {
        echo "True";
    }
    else
    {
        echo "false";
    }
    echo '<br>';

    if($var == 'Hello')
    {
        echo "True";
    }
    else
    {
        echo "false";
    }
    echo '<br>';

    // IF ELSE Statement

    $age = 22;

    if($age == 23)
    {
        echo "Age 23";
    }
    else if($age == 22)
    {
        echo "Age 22";
    }
    else
    {
        echo "Age Not Match";
    }
    echo '<br><br>';

    // Assignment Operator

    $num1 = 10;
    //$num2 = 20;

    //$num1 = $num1 + 10;
    $num1 += 10;
    echo 'Summation : '.$num1;
    echo '<br>';

    //$num1 = $num1 + 10;
    $num1 -= 10;
    echo 'Subtraction : '.$num1;
    echo '<br>';

    $num1 *= 10;
    echo 'Multiplication : '.$num1;
    echo '<br>';

    $num1 /= 10;
    echo 'Division : '.$num1;
    echo '<br>';

    echo '<br>';

    // Comparison Operator

    $num2 = 20;
    $num3 = 30;

    if($num2 <= $num3)
    {
        echo 'True';
    }
    else
    {
        echo 'False';
    }
    echo '<br>';

    if($num2 >= $num3)
    {
        echo 'True';
    }
    else
    {
        echo 'False';
    }
    echo '<br>';
    
    if($num2 != 20)
    {
        echo 'True';
    }
    else
    {
        echo 'False';
    }

    echo '<br><br>';

    // Arithmetic Operator

    $number1 = 100;
    $number2 = 10;

    $result = $number1 + $number2;
    echo $result;
    echo '<br>';

    $result = 0;
    $result = $number1 - $number2;
    echo $result;
    echo '<br>';

    $result = 0;
    $result = $number1 * $number2;
    echo $result;
    echo '<br>';

    $result = 0;
    $result = $number1 / $number2;
    echo $result;
    echo '<br>';

    $result = 0;
    $result = $number1 % $number2;
    echo $result;
    echo '<br>';

    $result = 10;
    $result++;
    echo $result;
    echo '<br>';

    $result--;
    echo $result;
    echo '<br>';

    echo '<br><br>';

    // Logical Operator

    $number1 = 100;
    $number2 = 1000;

    $num = 999;

    if($number1 < $num && $number2 > $num)
    {
        echo $num.' is Between '.$number1.' And '.$number2;
    }
    else
    {
        echo 'Not in Range';
    }

    echo '<br><br>';

    $number1 = 100;
    $number2 = 500;

    $num = 1000;

    if($number1 == $num || $number2 == $num)
    {
        echo 'Ok';
    }
    else
    {
        echo 'Not Ok';
    }

    echo '<br><br>';

    $number1 = 100;
    $number2 = 500;

    $num = 1000;

    if(!($number1 == $num) || !($number2 == $num))
    {
        echo 'Ok';
    }
    else
    {
        echo 'Not Ok';
    }

    echo '<br><br>';

    // Triple Equal

    $var1 = '1';
    $var2 = 1;

    if($var1 === $var2) // Triple Equals Compare Value as well as DataType
    {
        echo 'Equals.';
    }
    else
    {
        echo 'Not Equals.';
    }

    echo '<br><br>';

    // While Loop

    $counter = 1;

    while($counter <= 10)
    {
        echo $counter.' - Renil<br>';
        $counter++;
    }

    echo '<br><br>';

    // Do While Loop

    $counter = 1;

    do
    {
        echo $counter.' - Renil<br>';
        $counter++;
    }
    while($counter <= 10);

    echo '<br><br>';

    // For Loop

    for ($i=1; $i <= 10; $i++) 
    { 
        echo $i.' - Hello<br>';
    }

    echo '<br><br>';

    // Switch Statement

    $number = 13;

    switch($number)
    {
        case '11':
            echo "It is Eleven";
        break;
        case '12':
            echo "It is Twelve";
        break;
        case '13':
            echo "It is Thirteen";
        break;
        default:
            echo "Not a number";
    }

    echo '<br><br>';

    $day = 'Saturday';

    switch($day)
    {
        case 'Saturday':
        case 'Sunday':
            echo "It's a Weekend";
        break;
        default:
            echo "Not weekend";
    }
?>

