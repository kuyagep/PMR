<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $position=$_POST['position'];
        $desc=$_POST['desc'];
        $query=mysqli_query($con,"UPDATE `position` SET `position_name`='".$position."',`position_desc`='".$desc."' WHERE  `position_id`='".$id."'");
        header("Location: ../../index.php?page=position-edit&& id=".$id);

    }
?>