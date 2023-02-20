<?php
    $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM suppliers WHERE supplier_id='$idx'");
    include('action/admin/edit-supplier.php');
?>