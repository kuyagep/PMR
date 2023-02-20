<?php
    include('../../../conf/config.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $query=mysqli_query($con,"DELETE FROM category WHERE category_id='".$id."'");
        header("location: ../../category");
    }

?>