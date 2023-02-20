<?php
    include('../../../conf/config.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        //$query=mysqli_query($con,"DELETE FROM pmr_table WHERE pmr_id='".$id."'");
        $query=mysqli_query($con,"UPDATE `pmr_table` SET `deleted`= 0  WHERE pmr_id='".$id."'");
        header("location: ../../index.php?page=pmr&d-1");
    }

?>
