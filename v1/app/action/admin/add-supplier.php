<?php
    include('../../../conf/config.php');
    
    $supplier = ucwords(trim($_POST['supplier']));
    $address = trim($_POST['address']);
    $contact = trim($_POST['contact']);
    $email = trim($_POST['email']);

    $query=mysqli_query($con,"INSERT INTO `suppliers`(`supplier_name`, `address`, `contact_no`, `email_add`) 
                                            VALUES ('".$supplier."','".$address."','".$contact."','".$email."')" );
    $_SESSION['status'] = "Supplier Account Succefully Created!";
    $_SESSION['success_code'] = "success";
    header("location: ../../suppliers");
?>