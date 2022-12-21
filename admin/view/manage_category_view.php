<?php
$obj_catdata = $obj->display_category();

if (isset($_GET['status'])) {
    if ($_GET['status'] = 'delete') {
        $delete_id = $_GET['id'];
        $del_msg = $obj->delete_category_data($delete_id);

    }
}


?>


<h2>Category Manage Page</h2>
<?php
if (isset($del_msg)) {
    echo $del_msg;
}
?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($cat = mysqli_fetch_assoc($obj_catdata)) { ?>
        <tr>
            <td>
                <?php echo $cat['cat_ID']; ?>
            </td>
            <td>
                <?php echo $cat['cat_Name']; ?>
            </td>
            <td>
                <?php echo $cat['cat_Des']; ?>
            </td>
            <td>
                <a class="btn btn-primary" href="#">Edit</a>
                <a class="btn btn-warning" href="?status=delete&&id=<?php echo $cat['cat_ID']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>