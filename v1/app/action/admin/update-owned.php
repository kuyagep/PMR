<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $status=$_POST['status'];
        
        $query=mysqli_query($con,"UPDATE `items` SET `status_id`='".$status."' WHERE  `item_id`='".$id."'");
        header("Location: ../../index.php?page=owned-items");
    }
?>