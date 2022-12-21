<?php
class adminBlog
{
    private $conn;

    // DB conection start
    public function __construct()
    {
        #database host
        #database user information
        #database password
        #database name
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'blogproject';

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); // DB conection 
        if (!$this->conn) {
            die("Database Connection Error!!!");
        }
    }

    // DB conection call and add data
    public function admin_login($data)
    {
        $std_email = $data['admin_email']; //admin_email is name of email input type
        $std_pass = md5($data['admin_pass']); //admin_email is name of password input type

        $query = "SELECT * From admin_info Where admin_email='$std_email' And admin_pass='$std_pass'";

        if (mysqli_query($this->conn, $query)) #connection and query
        {
            $std_admin_info = mysqli_query($this->conn, $query);
            if ($std_admin_info) {
                header("location:dashboard.php"); // if login then goto dashboard page

                $admin_data = mysqli_fetch_assoc($std_admin_info); //array row to  fetch admin_info data
                session_start(); // session open
                // session check
                $_SESSION['adminID'] = $admin_data['ID'];
                $_SESSION['adminName'] = $admin_data['admin_name'];


            }
        }



    }

    public function adminLogout()
    {
        unset($_SESSION['adminID']);
        unset($_SESSION['adminName']);
        header('location:index.php');

    }


    public function add_category($data)
    {
        $std_cat_Name = $data['cat_name'];
        $std_cat_des = $data['cat_des'];
        $query = " INSERT INTO category(cat_Name,cat_Des) values('$std_cat_Name','$std_cat_des')";
        if (mysqli_query($this->conn, $query)) {
            return "Category Added Successfully!";
        }

    }

    public function display_category()
    {
        $query = " SELECT * From category";
        if (mysqli_query($this->conn, $query)) #connection and query
        {
            $category_info = mysqli_query($this->conn, $query);
            // $studentData=mysqli_fetch_assoc($returndata);
            return $category_info;
        }
    }


    public function delete_category_data($id)
    {
        $query = "DELETE FROM category WHERE cat_ID=$id"; //catch alldata
        if (mysqli_query($this->conn, $query)) // received all data by cat_ID
        {
            return "Deleted Succesfully!";
        }


    }




}



?>