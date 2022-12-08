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
    }


?>