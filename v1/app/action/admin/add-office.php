<?php
    include('../../../conf/config.php');
    
    $office = ucwords(trim($_POST['office']));

    $query=mysqli_query($con,"INSERT INTO `office`(`office_name`) 
                                            VALUES ('".$office."')" );
    $_SESSION['status'] = "Office Account Succefully Created!";
    $_SESSION['success_code'] = "success";
    header("location: ../../office");
?>