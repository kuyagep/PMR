<?php
    $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM category WHERE category_id='$idx'");
    include('action/admin/edit-category.php');
?>