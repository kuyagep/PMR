<?php
    include('../../../conf/config.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pr = validate($_POST["pr"]);
        $po = validate($_POST["po"]);
        $date = validate($_POST["date"]);
        $category = validate($_POST["category"]);
        $particulars = validate($_POST["particulars"]);
        $amount = validate($_POST["amount"]);
        $src_fund = validate($_POST["src_fund"]);
        $end_user = validate($_POST["end_user"]);
        $status = validate($_POST["status"]);
        $remarks = validate($_POST["remarks"]);
        $added_at = date('Y-m-d H:i:s');

        // if (empty($_POST["pr"])) {
        // // $prErr = "PR # is required!";
        // } else {
        // $name = test_input($_POST["name"]);
        // // check if name only contains letters and whitespace
        // if (!preg_match("/^[a-zA-Z0-9' ]*$/",$name)) {
        //     $nameErr = "Only letters and white space allowed";
        // }
        // }


        $query=mysqli_query($con,"INSERT INTO `pmr_table`(`pr_no`, `po_no`, `date`, `pcategory_id`, `particulars`, `amount`, `src_fund`, `employee_id`, `pstatus_id`, `remarks`, `added_at`) 
                                  VALUES ('".$pr."','".$po."','".$date."','".$category."','".$particulars."','".$amount."','".$src_fund."','".$end_user."','".$status."','".$remarks."','".$added_at."')" );
   
        header("location: ../../index.php?page=pmr&d=1");
      }
      
      function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>