<?php
    include('../../../conf/config.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $query=mysqli_query($con,"DELETE FROM position WHERE position_id='".$id."'");
        header("location: ../../position");
    }

?>