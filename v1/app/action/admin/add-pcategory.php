<?php
    include('../../../conf/config.php');
    
    $category = ucwords(trim($_POST['pcategory']));

    $query=mysqli_query($con,"INSERT INTO `procurement_category`(`category_name`) 
                                            VALUES ('".$category."')" );
    header("location: ../../purchase-category");
?>