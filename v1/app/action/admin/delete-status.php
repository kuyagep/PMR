<?php
    include('../../../conf/config.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $query=mysqli_query($con,"DELETE FROM item_status WHERE status_id='".$id."'");
        header("location: ../../status");
    }

?>