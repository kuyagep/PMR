<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $office=$_POST['office'];
        $query=mysqli_query($con,"UPDATE `office` SET `office_name`='".$office."' WHERE  `office_id`='".$id."'");
        header("Location: ../../index.php?page=office-edit&& id=".$id);

    }
?>