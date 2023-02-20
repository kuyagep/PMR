<?php
    include('../../../conf/config.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $query=mysqli_query($con,"DELETE FROM office WHERE office_id='".$id."'");
        header("location: ../../office");
    }

?>