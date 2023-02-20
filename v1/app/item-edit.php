<?php
    $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM items WHERE item_id='$idx'");
    include('action/admin/edit-item.php');
?>