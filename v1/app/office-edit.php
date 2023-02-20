<?php
    $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM office WHERE office_id='$idx'");
    include('action/admin/edit-office.php');
?>