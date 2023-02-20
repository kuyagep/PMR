<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $status=$_POST['status'];
        $query=mysqli_query($con,"UPDATE `item_status` SET `status_desc`='".$status."' WHERE  `status_id`='".$id."'");
        header("Location: ../../index.php?page=status-edit&& id=".$id);

    }
?>