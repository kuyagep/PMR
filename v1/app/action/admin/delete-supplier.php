<?php
    include('../../../conf/config.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $query=mysqli_query($con,"DELETE FROM suppliers WHERE supplier_id='".$id."'");
        header("location: ../../suppliers");
    }

?>