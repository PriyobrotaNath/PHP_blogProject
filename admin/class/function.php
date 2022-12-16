 
<?php
    class adminBlog{
        private $conn;
        
        // DB conection start
        public function __construct()
        {
            #database host
            #database user information
            #database password
            #database name
            $dbhost='localhost';
            $dbuser='root';
            $dbpass="";
            $dbname='blogproject';

            $this->conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); // DB conection 
            if(!$this->conn){
                die("Database Connection Error!!!");
            }
        }

        // DB conection call and add data
        public function admin_login($data){
             $std_email=$data['admin_email'];//admin_email is name of email input type
             $std_pass=md5($data['admin_pass']);//admin_email is name of password input type
            
             $query="SELECT * From admin_info Where admin_email='$std_email' And admin_pass='$std_pass'" ;

             if(mysqli_query($this->conn,$query)) #connection and query
             {
                  $std_admin_info=mysqli_query($this->conn,$query);
                  if($std_admin_info){
                     header("location:dashboard.php");// if login then goto dashboard page

                      $admin_data=mysqli_fetch_assoc($std_admin_info);//array row to  fetch admin_info data
                      session_start();// session open
                     // session check
                      $_SESSION['adminID']=$admin_data['ID'];
                      $_SESSION['adminName']=$admin_data['admin_name'];

                   
                  }
             }

        }
    }


?>