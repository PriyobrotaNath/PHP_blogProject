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
