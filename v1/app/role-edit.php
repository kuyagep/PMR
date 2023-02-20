<?php
    $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM role WHERE role_id='$idx'");
    include('action/admin/edit-role.php');
?>