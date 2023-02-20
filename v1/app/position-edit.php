<?php
    $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM position WHERE position_id='$idx'");
    include('action/admin/edit-position.php');
?>