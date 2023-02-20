<?php
    include('../../../conf/config.php');
    
    $status = ucwords(trim($_POST['status']));

    $query=mysqli_query($con,"INSERT INTO `item_status`(`status_desc`) 
                                            VALUES ('".$status."')" );
    $_SESSION['status'] = "Status Account Succefully Created!";
    $_SESSION['success_code'] = "success";
    header("location: ../../status");
?>