<?php
    $idx = $_SESSION['id'];
    $query = mysqli_query($con,"SELECT * FROM employee WHERE employee_id='$idx'");
    include('action/admin/edit-profile.php');
?>