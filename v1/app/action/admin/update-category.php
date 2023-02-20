<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $category=$_POST['category'];
        $query=mysqli_query($con,"UPDATE `category` SET `category_name`='".$category."' WHERE  `category_id`='".$id."'");
        header("Location: ../../category");

    }
?>