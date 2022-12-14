<?php
include("class/function.php");//include function page
$obj=new adminBlog();
session_start();//session open and access session data 
 $std_id=$_SESSION['adminID'];// match Id 
 
 if($std_id==null){ //adminID check
     header("location:index.php");// if id does not match go through the index.php  
 }
// logout part
 if(isset($_GET['adminlogout'])){
    if($_GET['adminlogout']=='logout'){
        $obj->adminLogout();
    }
 }
 


?>




<!-- start php head part -->
<?php

include_once("includes/head.php");//head.php file include

?>
<!-- end php head part -->
    <body class="sb-nav-fixed">
        <!-- start php top_nav part -->
        <?php
        
        include_once("includes/top_nav.php");//top_nav.php file include

        ?>
        <!-- end php sidenav part -->
        <div id="layoutSidenav">
        <?php
        
        include_once("includes/sidenav.php");//sidenav.php file include

        ?>
        <!-- end php sidenav part -->
            <div id="layoutSidenav_content">
                <!-- start main -->
                <main>
                    <div class="container-fluid">
                    <?php
                        if(isset($view))
                        {
                            if($view=="dashboard")
                            {
                                include("view/dash_view.php");//show dashboard contant
                            }
                            elseif($view=="add_post"){
                                include("view/add_post_view.php");//show add_post contant
                            }
                            elseif($view=="add_category"){
                                include("view/add_category_view.php");//show add_category contant
                            }
                            elseif($view=="manage_post"){
                                include("view/manage_post_view.php");//show manage_post contant
                            }
                            elseif($view=="manage_category"){
                                include("view/manage_category_view.php");//show manage_category contant
                            }
                        }

                           
                    ?>
                    
                    </div>
                </main>
                <!-- end main -->
                 <!-- start footer -->
                 <?php
        
                include_once("includes/footer.php");//footer.php file include

                ?>
                <!-- end footer -->
            </div>
        </div>
        <?php
        
        include_once("includes/script.php");//script.php file include

        ?>
        <!-- end php script part -->
    </body>
</html>
