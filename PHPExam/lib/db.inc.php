<?php 

/**
 * 
 */
class Database
{
	public $hostname = 'localhost';
	public $username = 'renil_sql';
	public $password = '';
	public $database = 'php_exam';
	public $db;

	public function __construct() {
        $this->db = $this->connect();
    }

    public function connect()
    {
        $conn = @mysqli_connect($this->hostname, $this->username, $this->password, $this->database);

        if($conn) {
            return $conn;
        } else {
            return false;
        }
    }

    // Register
    public function insert($table, $data)
    {
        $sql = "INSERT INTO $table (prefix, firstname, lastname, email, mobile, password, information) VALUES ('".$data['prefix']."','".$data['firstname']."','".$data['lastname']."','".$data['email']."','".$data['mobile']."','".$data['password']."','".$data['information']."')";

        if (mysqli_query($this->db,$sql)) {
            return true;
        } else {
            return mysqli_error($this->db);
        }
    }

    // check duplicate email
    public function duplicateEmail($table, $email)
    {
        $sql = "SELECT * FROM $table WHERE email = '".$email."'";

        if($result = mysqli_query($this->db,$sql)) {
            if($rows = mysqli_num_rows($result)) {
                return $rows;
            } else {
                return mysqli_error($this->db);
            }
        } else {
            return mysqli_error($this->db);
        }
    }

    // check user login
    public function login($table, $data) {
        $sql = "SELECT * FROM $table WHERE email = '".$data['email']."' AND password = '".$data['password']."'";
        if ($row = mysqli_query($this->db,$sql)) {
            if ($result = mysqli_fetch_assoc($row)) {
                return $result;
            } else {
                return mysqli_error($this->db);
            }
        } else {
            return mysqli_error($this->db);
        }
    }

    // Find only parent category
    public function parent_category($table)
    {
        $sql = "SELECT * FROM $table WHERE parent_id = '0'";
        if($row = mysqli_query($this->db,$sql)) {
            if($result = mysqli_fetch_all($row,MYSQLI_ASSOC)) {
                return $result;
            } else {
                return mysqli_error($this->db);
            }           
        } else {
            return mysqli_error($this->db);
        }
    }

    // check duplicate url
    public function duplicateurl($table, $url)
    {
        $sql = "SELECT * FROM $table WHERE url = '".$url."'";

        if($result = mysqli_query($this->db,$sql)) {
            if($rows = mysqli_num_rows($result)) {
                return $rows;
            } else {
                return mysqli_error($this->db);
            }
        } else {
            return mysqli_error($this->db);
        }
    }

    // Add category
    public function add_category($table, $data)
    {
        $sql = "INSERT INTO $table (title, content, url, metatitle, image, parent_id) VALUES ('".$data['title']."','".$data['content']."','".$data['url']."','".$data['metatitle']."','".$data['image']."','".$data['parent_id']."')";

        if (mysqli_query($this->db,$sql)) {
            return true;
        } else {
            return mysqli_error($this->db);
        }
    }

    // Fecth All category
    public function fetch_category($table)
    {
        $sql = "SELECT * FROM category";

        if ($row = mysqli_query($this->db,$sql)) {
            if($result = mysqli_fetch_all($row,MYSQLI_ASSOC)) {
                return $result;
            } else {
                return mysqli_error($this->db);
            }      
        }
    }

    // Fetch Single category
    public function fetch_single_category($table,$id)
    {
        $sql = "SELECT * FROM category WHERE id='$id'";

        if ($row = mysqli_query($this->db,$sql)) {
            if($result = mysqli_fetch_array($row)) {
                return $result;
            } else {
                return mysqli_error($this->db);
            }      
        }
    }

    // Delete category
    public function delete_category($table,$id) 
    {
        $sql = "DELETE FROM $table WHERE id='$id'";
        if ($row = mysqli_query($this->db,$sql)) {
            return true;
        } else {
            return mysqli_error($this->db);
        } 
    }

    // Add blog post
    public function add_blogpost($table,$data)
    {
        $sql = "INSERT INTO $table (title, content, url, published, image, user_id) VALUES ('".$data['title']."','".$data['content']."','".$data['url']."','".$data['published']."','".$data['image']."','".$data['user_id']."')";

        if (mysqli_query($this->db,$sql)) {
            $last_id = $this->db->insert_id;
            return $last_id;        
        } else {
            return mysqli_error($this->db);
        }
    }

    // Add data to blog post_category table
    public function add_post_category($table,$data)
    {
        echo $category_id;
        $sql = "INSERT INTO $table VALUES ('".$data['post_id']."','".$data['category_id']."')";
        if (mysqli_query($this->db,$sql)) {
            return true;        
        } else {
            return mysqli_error($this->db);
        }
    }

    // update category
    public function update_category($table, $data)
    {
        $sql = "UPDATE $table SET  `title` = '".$data['title']."', `parent_id` = '".$data['parent_id']."', `content` = '".$data['content']."', `url` = '".$data['url']."', `metatitle` = '".$data['metatitle']."', `image` = '".$data['image']."' WHERE `id` = '".$data['id']."';";

        if (mysqli_query($this->db,$sql)) {
            return true;        
        } else {
            return mysqli_error($this->db);
        }
    }
}

?>