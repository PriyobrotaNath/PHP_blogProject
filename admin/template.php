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
