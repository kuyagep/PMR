<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $category=$_POST['pcategory'];
        $query=mysqli_query($con,"UPDATE `procurement_category` SET `category_name`='".$category."' WHERE  `pcategory_id`='".$id."'");
        header("Location: ../../purchase-category");

    }
?>