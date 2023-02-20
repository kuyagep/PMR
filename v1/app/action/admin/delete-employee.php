<?php
    include('../../../conf/config.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $query=mysqli_query($con,"DELETE FROM employee WHERE employee_id='".$id."'");
        header("location: ../../employee");
    }

    if(isset($_POST['deleteSend'])){
        $unique=$_POST['deleteSend'];
        $sql = "DELETE FROM `employee` WHERE employee_id = $unique";
        $result = mysqli_query($con, $sql);
    }
?>