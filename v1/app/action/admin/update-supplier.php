<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $supplier=$_POST['supplier'];
        $address=$_POST['address'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $query=mysqli_query($con,"UPDATE `suppliers` SET `supplier_name`='".$supplier."',`address`='".$address."',`contact_no`='".$contact."',`email_add`='".$email."' WHERE  `supplier_id`='".$id."'");
        header("Location: ../../index.php?page=supplier-edit&& id=".$id);

    }
?>