<?php 
session_start();
include_once 'db.inc.php';

$db = new Database();

if (isset($_POST['register'])) {
	if(isset($_POST['prefix']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['password']) && isset($_POST['confirm']) && isset($_POST['information'])) {

		$prefix = $_POST['prefix'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$password = md5($_POST['password']);
		$confirm = $_POST['confirm'];
		$information = $_POST['information'];

		$data = ['prefix' => $prefix, 'firstname' => $firstname, 'lastname' => $lastname, 'email' => $email, 'mobile' => $mobile, 'password' => $password, 'information' => $information];

		$num_rows = $db->duplicateEmail('users',$email);

		if($num_rows > 0) {
			echo "Email Already Exists !!";
		} else if($db->insert('users',$data)) {
			header('Location: ../index.php');
		} else {
			echo "Register Failed !!";
		}
	}
}

if(isset($_POST['login'])) {
	if(isset($_POST['email']) && isset($_POST['password'])) {
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$data = ['email' => $email, 'password' => $password];

		$login = $db->login('users',$data);

		if($login['email'] == $email && $login['password'] == $password) {
			$_SESSION['user_id'] = $login['id'];
			header('Location: ../blog_post.php');
		} else {
			$_SESSION['time'] = time()+5;
			$_SESSION['loginfail'] = "Wrong Username Or Password";
			header('Location: ../index.php');
		}
	}
}


if(isset($_POST['addcategory'])) {
	if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['metatitle']) && isset($_POST['image']) && isset($_POST['parent_category'])) {

		$title = $_POST['title'];
		$content = $_POST['content'];
		$url = $_POST['url'];
		$metatitle = $_POST['metatitle'];
		$image = $_POST['image'];
		$parent_id = $_POST['parent_category'];

		$data = ['title' => $title , 'content' => $content , 'url' => $url , 'metatitle' => $metatitle , 'image' => $image , 'parent_id' => $parent_id];

		$num_rows = $db->duplicateurl('category',$url);

		if($num_rows > 0) {
			echo "URL Already Exists !!";
		} else if($db->add_category('category',$data)) {
			header('Location: ../manage_category.php');
		} else {
			echo "Category Not Added !!";
		}
	}
}


if(isset($_POST['updatecategory'])) {
	if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['metatitle']) && isset($_POST['image']) && isset($_POST['parent_category'])) {

		$id = $_POST['id'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$url = $_POST['url'];
		$metatitle = $_POST['metatitle'];
		$image = $_POST['image'];
		$parent_id = $_POST['parent_category'];

		$update_data = ['id' => $id, 'title' => $title , 'content' => $content , 'url' => $url , 'metatitle' => $metatitle , 'image' => $image , 'parent_id' => $parent_id];

	 	if($db->update_category('category',$update_data)) {
			header('Location: ../manage_category.php');
		} else {
			echo "Category Not Updated !!";
		}
	}
}

if(isset($_POST['load'])) {
    $data = $db->fetch_category('category');
    $result = '<table class="table mt-4 table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Id</th>
                    <th>Category Image</th>
                    <th>Category Name</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-light">';
            
            if(count($data) > 0) {
                foreach ($data as $value) {
                    $result .= 
                        '<tr>
                        <td>'.$value['id'].'</td>
                        <td>'.$value['image'].'</td>
                        <td>'.$value['title'].'</td>
                        <td>'.$value['createdAt'].'</td>
                        <td>
                            <a href="update_category.php?id='.$value['id'].'" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
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

if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    if($db->delete_category('category',$id)) {
        echo true;
    } else {
        echo false;
    }
}


if(isset($_POST['addblogpost'])) {
	if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['published']) && isset($_POST['image']) && isset($_POST['category'])) {

		$title = $_POST['title'];
		$content = $_POST['content'];
		$url = $_POST['url'];
		$published = $_POST['published'];
		$image = $_POST['image'];
		$category = json_encode($_POST['category']); 

		if(isset($_SESSION['user_id'])) {
		    $id = $_SESSION['user_id'];
		}

		$data = ['title' => $title , 'content' => $content , 'url' => $url , 'published' => $published , 'image' => $image, 'user_id' => $id];

		if($last_record = $db->add_blogpost('blog_post',$data)) {
			// $post_data = ['post_id' => $last_record, 'category_id' => $category];
			// print_r($post_data);
			if($db->add_post_category('post_category',$post_data)) {
				header('Location: ../blog_post.php');
			}
		} else {
			echo "Post Category Not Added !!";
		}
	}
}

 ?>