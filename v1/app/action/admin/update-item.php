<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $item_name=$_POST['item_name'];
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
        //picture//
        $file_name = $_FILES['picture']['name'];
        
        $file_temp = $_FILES['picture']['tmp_name'];
        move_uploaded_file($file_temp, '../../dist/img/items/'.$file_name);
        $query=mysqli_query($con,"UPDATE `items` SET `item_name`='".$item_name."',`item_desc`='".$item_desc."',
        `item_serial`='".$item_serial."', `item_model`='".$item_model."',`item_brand`='".$item_brand."',
        `unit`='".$unit."',`item_amount`='".$item_amount."',`item_purdate`='".$item_purdate."',
        `supplier_id`='".$supplier."', `category_id`='".$category."', `con_id` ='".$condition."',
         `status_id`='".$status."' WHERE  `item_id`='".$id."'");
         
         header("Location: ../../index.php?page=item-edit&& id=".$id);

    }
?>