<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = validate($_POST["id"]);
        $pr = validate($_POST["pr_no"]);
        $po = validate($_POST["po_no"]);
        $date = validate($_POST["date"]);
        $category = validate($_POST["category"]);
        $particulars = validate($_POST["particulars"]);
        $amount = validate($_POST["amount"]);
        $src_fund = validate($_POST["src_fund"]);
        $end_user = validate($_POST["end_user"]);
        $status = validate($_POST["status"]);
        $remarks = validate($_POST["remarks"]);

        $query=mysqli_query($con,"UPDATE `pmr_table` SET 
        `pr_no`='".$pr."',
        `po_no`='".$po."',
        `date`='".$date."',
        `pcategory_id`='".$category."',
        `particulars`='".$particulars."',
        `amount`='".$amount."',
        `src_fund`='".$src_fund."',
        `employee_id`='".$end_user."',
        `pstatus_id`='".$status."', 
        `remarks`='".$remarks."' 
        
        WHERE  `pmr_id`='".$id."'");
        header("Location: ../../index.php?page=pmr-edit&id=".$id);

    }

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>