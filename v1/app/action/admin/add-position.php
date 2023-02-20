<?php
    include('../../../conf/config.php');
    
    $position = ucwords(trim($_POST['position']));
    $desc = ucwords(trim($_POST['desc']));

    $query=mysqli_query($con,"INSERT INTO `position`(`position_name`, `position_desc`) 
                                            VALUES ('".$position."','".$desc."')" );
    $_SESSION['status'] = "Position Account Succefully Created!";
    $_SESSION['success_code'] = "success";
    header("location: ../../position");
?>