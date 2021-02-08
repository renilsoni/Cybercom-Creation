<?php

require_once 'database.php';
require 'validation.php';

$db = new database\Dbconnect();
$validate = new phpValidation();

if(isset($_POST['create'])) {
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['title']) && isset($_POST['datetime'])) {
            $name = $validate->nameValidation($_POST['name']);
            $email = $validate->emailValidation($_POST['email']);
            $phone = $validate->phoneValidation($_POST['phone']);
            $title = $validate->titleValidation($_POST['title']);
            $datetime = $validate->datetimeValidation($_POST['datetime']);

            $data = ['name' => $name, 'email'=> $email, 'phone'=> $phone, 'title'=> $title, 'datetime'=> $datetime];

            if(isset($_SESSION['name_error']) || isset($_SESSION['email_error']) || isset($_SESSION['phone_error']) || isset($_SESSION['title_error']) || isset($_SESSION['datetime_error'])) {
                $_SESSION['data'] = $data;
                header('Location: ../create.php');
            } else {
                if ($db->insert('contact',$data)) {
                    $_SESSION['successmsg'] = "Record Inserted Successfully.";
                    $_SESSION['time'] = time()+3;
                    header('Location: ../contacts.php');
                } else {
                    echo "Not Inserted";
                }
            }
    }
}



if(isset($_POST['update'])) {
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['title']) && isset($_POST['datetime'])) {

            $id = $_POST['id'];
            $name = $validate->nameValidation($_POST['name']);
            $email = $validate->emailValidation($_POST['email']);
            $phone = $validate->phoneValidation($_POST['phone']);
            $title = $validate->titleValidation($_POST['title']);
            $datetime = $validate->datetimeValidation($_POST['datetime']);

            $data = ['name' => $name, 'email'=> $email, 'phone'=> $phone, 'title'=> $title, 'datetime'=> $datetime];

            if(isset($_SESSION['name_error']) || isset($_SESSION['email_error']) || isset($_SESSION['phone_error']) || isset($_SESSION['title_error']) || isset($_SESSION['datetime_error'])) {
                $_SESSION['id'] = $id;
                $_SESSION['data'] = $data;
                header('Location: ../update.php');
            } else {
                if ($db->updateSingleRecord('contact',$data,$id)) {
                    session_unset();
                    $_SESSION['successmsg'] = "Record Updated Successfully.";
                    $_SESSION['time'] = time()+3;
                    header('Location: ../contacts.php');
                } else {
                    echo "Not Updated";
                }
            }
    }
}



// if(isset($_POST['load'])) {
//     $data = $db->fetchdata('contact');
//     $result = '

//     <table class="table mt-4 table-striped">
//             <thead class="table-primary">
//                 <tr>
//                     <th>Id</th>
//                     <th>Name</th>
//                     <th>Email</th>
//                     <th>Phone</th>
//                     <th>Title</th>
//                     <th>Created</th>
//                     <th></th>
//                 </tr>
//             </thead>
//             <tbody class="table-light">';
            
//             if(count($data) > 0) {
//                 foreach ($data as $value) {
//                     $result .= 
//                         '<tr>
//                         <td>'.$value['id'].'</td>
//                         <td>'.$value['name'].'</td>
//                         <td>'.$value['email'].'</td>
//                         <td>'.$value['phone'].'</td>
//                         <td>'.$value['title'].'</td>
//                         <td>'.$value['datetime'].'</td>
//                         <td>
//                             <a href="update.php?id='.$value['id'].'" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
//                             <button class="btn btn-sm btn-danger delete" id="'.$value['id'].'"><i class="fa fa-trash"></i></button>
//                         </td>
//                         </tr>';
//                 }
//             } else {
//                 $result .= '
//                         <tr>
//                             <td colspan="8" align="center">Data Not Found</td>
//                         </tr>';
//             }
//             $result .= '</tbody></table>';
//             echo $result;
// }

if(isset($_POST['load'])) {
    $page = $_POST['page'];
    $limit = $_POST['limit'];
    $data = $db->paginationData('contact',$page,$limit);
    $result = '

    <table class="table mt-4 table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-light">';
            
            if(count($data) > 0) {
                foreach ($data as $value) {
                    $result .= 
                        '<tr>
                        <td>'.$value['id'].'</td>
                        <td>'.$value['name'].'</td>
                        <td>'.$value['email'].'</td>
                        <td>'.$value['phone'].'</td>
                        <td>'.$value['title'].'</td>
                        <td>'.$value['datetime'].'</td>
                        <td>
                            <a href="update.php?id='.$value['id'].'" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                            <button class="btn btn-sm btn-danger delete" id="'.$value['id'].'"><i class="fa fa-trash"></i></button>
                        </td>
                        </tr>';
                }
            } else {
                $result .= '
                        <tr>
                            <td colspan="8" align="center">Data Not Found</td>
                        </tr>';
            }
            $result .= '</tbody></table>';
            echo $result;
}


if(isset($_POST['pagination'])) {
    $limit = $_POST['limit'];
    $total_record = count($db->fetchdata('contact'));
    $total_page = ceil($total_record / $limit);

    $result = '<ul class="pagination pagination-sm justify-content-center"> 
                <li class="page-item active"><a class="page-link" data=1>1</a></li>';


    for ($i=2; $i <= $total_page ; $i++) { 
        $result .= '<li class="page-item"><a class="page-link" data = '.$i.'>'.$i.'</a></li>';
    }
    $result .= '</ul>';
    echo $result;
}


if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    if($db->deleteData('contact',$id)) {
        echo true;
    } else {
        echo false;
    }
}

?>