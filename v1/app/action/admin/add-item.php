<?php
    include('../../../conf/config.php');

    $item_name= ucwords($_POST['item_name']);
    $item_desc=$_POST['item_desc'];
    $item_serial=$_POST['item_serial'];
    $item_model=$_POST['item_model'];
    $item_brand=$_POST['item_brand'];
    $unit=$_POST['unit'];
    $item_amount=$_POST['item_amount'];
    $item_purdate=$_POST['item_purdate'];
    $supplier=$_POST['supplier'];
    $category=$_POST['category'];
    $condition=$_POST['condition'];
    $status=$_POST['status'];
    

    $query=mysqli_query($con,"INSERT INTO `items`( `item_name`, `item_desc`, `item_serial`, `item_model`, `item_brand`, `unit`,
     `item_amount`, `item_purdate`, `supplier_id`, `category_id`, `con_id`, `status_id`) 
                                            VALUES ('".$item_name."','".$item_desc."','".$item_serial."',
                                            '".$item_model."','".$item_brand."','".$unit."','".$item_amount."',
                                            '".$item_purdate."','".$supplier."','".$category."','".$condition."', '".$status."')" );
    $_SESSION['status'] = "Items Account Succefully Added!";
    $_SESSION['success_code'] = "success";
    header("location: ../../items");
?>