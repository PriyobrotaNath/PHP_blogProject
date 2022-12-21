<?php
include("class/function.php");
$obj = new adminBlog();
$obj_edit_cat_data = $obj->display_category();
if (isset($_GET['status'])) {
    if ($_GET['status'] = 'edit') {
        $edit_id = $_GET['id'];
        $obj_cat_edit_data = $obj->display_catdata_by_id($edit_id);
    }
}
if (isset($_POST['edit_btn'])) {
    $edit_msg = $obj->update_category_info($_POST);

}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Blog App</title>
</head>

<body>
    <!-- form create -->
    <div class="container my-4 p-4 shadow">
        <h2><a style=" text-decoration:none" href="index.php">Category Information</a></h2>
        <form class="form" action="" method="POST" enctype="multipart/form-data">
            <?php
            if (isset($edit_msg)) {
                echo $edit_msg;
            }
            ?>

            <input class="form-control mb-2" type="text" name="u_cat_name"
                value="<?php echo $obj_cat_edit_data['cat_Name'] ?>">
            <input class="form-control mb-2" type="text" name="u_cat_des"
                value="<?php echo $obj_cat_edit_data['cat_Des'] ?>">
            <input type="hidden" name='u_cat_id' value="<?php echo $obj_cat_edit_data['cat_ID'] ?>">
            <input class="form-control bg-warning " type="submit" value="Update Information" name="edit_btn">

        </form>
    </div>



</body>

</html>