<?php
    $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM item_status WHERE status_id='$idx'");
    include('action/admin/edit-status.php');
?>