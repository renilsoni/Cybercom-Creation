<?php

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $reemail = $_POST['reemail'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $phone = $_POST['phone'];
    
    //echo $firstname."<br>".$lastname."<br>".$day."<br>".$month."<br>".$year."<br>".$gender."<br>".$email."<br>".$question."<br>".$answer."<br>".$address."<br>".$city."<br>".$state."<br>".$zipcode."<br>".$phone;
    
    if($firstname != '' && $lastname != '' && $day != '' && $month != '' && $year != '' && $gender != '' && $email != '' && $reemail != '' && $password != '' && $repassword != '' &&  $question != '' && $answer != '' && $address != '' && $city != '' && $state != '' && $zipcode != '' && $phone != '')
    {
        echo "<html>";
        echo "<head>";

        echo "</head>";
        echo "<body>";
            echo "<table border='1'>";
                echo "<tr>";
                    echo "<td>First Name : </td>";
                    echo "<td>".$firstname."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Last Name : </td>";
                    echo "<td>".$lastname."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Date Of Birth : </td>";
                    echo "<td>".$day."-".$month."-".$year."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Gender : </td>";
                    echo "<td>".$gender."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Email : </td>";
                    echo "<td>".$email."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Question : </td>";
                    echo "<td>".$question."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Answer : </td>";
                    echo "<td>".$answer."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Address : </td>";
                    echo "<td>".$address."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>City : </td>";
                    echo "<td>".$city."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>State : </td>";
                    echo "<td>".$state."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Zipcode : </td>";
                    echo "<td>".$zipcode."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Phone : </td>";
                    echo "<td>".$phone."</td>";
                echo "</tr>";
            echo "</table>";
        echo "</body>";
        echo "</html>";

    }
    else
    {
        echo "Please fill all details !!";
    }


?>