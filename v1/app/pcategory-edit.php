<?php
    $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM procurement_category WHERE pcategory_id='$idx'");
    include('action/admin/edit-pcategory.php');
?>