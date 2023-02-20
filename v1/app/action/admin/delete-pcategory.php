<?php
    include('../../../conf/config.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $query=mysqli_query($con,"DELETE FROM procurement_category WHERE pcategory_id='".$id."'");
        header("location: ../../purchase-category");
    }

?>