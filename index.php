<?php

include("admin/class/function.php"); ###include head body for client view
$obj = new adminBlog();

$get_category_info = $obj->display_category();

?>

<?php

include_once("includes/head.php"); ###include head body for client view

?>

<body>

    <!-- ***** Preloader Start ***** -->
    <?php

    include_once("includes/preloader.php");

    ?>
    <!-- ***** Preloader End ***** -->

    <!-- Header start -->
    <?php

    include_once("includes/header.php");

    ?>
    <!-- Header start -->

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php

    include_once("includes/banner_slider.php");

    ?>
    <!-- Banner Ends Here -->

    <!-- Call To Action Start -->
    <?php

    include_once("includes/callToAction.php");

    ?>
    <!-- Call to Action End -->

    <!-- Blog Start -->

    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <!-- Blogpost Start -->
                <?php

                include_once("includes/blogpost.php");

                ?>
                <!-- Blogpost End -->

                <!-- Sidebar Start -->
                <?php

                include_once("includes/sidebar.php");

                ?>
                <!-- Sidebar End -->

            </div>
        </div>
    </section>

    <!-- Blog End -->

    <!-- Footer Start -->

    <?php

    include_once("includes/footer.php");

    ?>

    <!-- Footer End -->

    <!-- Bootstrap Core and Additional JavaScript part Start -->
    <?php

    include_once("includes/script.php");

    ?>
    <!-- Bootstrap Core and Additional JavaScript part End -->