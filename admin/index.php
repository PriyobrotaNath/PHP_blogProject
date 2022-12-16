
<?php

include("class/function.php");
$objAdmin=new adminBlog();
if(isset($_POST['admin_login'])){
     $return_msg=$objAdmin->admin_login($_POST);
}

  session_start();
  $std_id=$_SESSION['adminID'];// match Id 
  if($std_id){
      header("location:dashboard.php");// if login,can not access login page again,if try go through the dashboard page 
  }


?>





<!-- start php head part -->
<?php

include_once("includes/head.php");//head.php file include

?>
<!-- end php head part -->

 <!-- start body -->
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <!-- start main -->
                <main>
                    <!-- start login part -->
                <?php
        
                include_once("includes/login.php");//login.php file include

                ?>
                <!-- end footer part -->
                </main>
                 <!-- end main -->
            </div>
            <div id="layoutAuthentication_footer">
                <!-- start footer -->
                <?php
        
                include_once("includes/footer.php");//footer.php file include

                ?>
                <!-- end footer -->
            </div>
        </div>
        <!-- start php script part -->
        <?php
        
        include_once("includes/script.php");//script.php file include

        ?>
        <!-- end php script part -->

    </body>
     <!-- end body -->
</html>
