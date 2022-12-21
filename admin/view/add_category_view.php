<?php
if (isset($_POST['btn_add_cat'])) {
    $return_msg = $obj->add_category($_POST);
}
?>




<h2>Add Category Page</h2>
<?php if (isset($return_msg)) {
    echo $return_msg;
} ?>
<form action="" method="Post">
    <div class="form-group">
        <label class="mb-1" for="cat_name">Category Name</label>
        <input name="cat_name" class="form-control py-4" id="inputEmailAddress" type="text" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="cat_des">Category Description</label>
        <input name="cat_des" class="form-control py-4" id="inputEmailAddress" type="text" />
    </div>
    <input type="submit" name="btn_add_cat" value="Add Category" class=" btn btn-primary">
</form>