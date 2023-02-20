<?php
    include('../../../conf/config.php');
    
    $category = ucwords(trim($_POST['category']));

    $query=mysqli_query($con,"INSERT INTO `category`(`category_name`) 
                                            VALUES ('".$category."')" );
    $_SESSION['status'] = "Category Account Succefully Created!";
    $_SESSION['success_code'] = "success";
    header("location: ../../category");
?>