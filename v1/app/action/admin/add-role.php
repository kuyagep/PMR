<?php
    include('../../../conf/config.php');
    
    $role = ucwords(trim($_POST['role']));

    $query=mysqli_query($con,"INSERT INTO `role`(`role_desc`) 
                                            VALUES ('".$role."')" );
    $_SESSION['status'] = "Role Account Succefully Created!";
    $_SESSION['success_code'] = "success";
    header("location: ../../role");
?>