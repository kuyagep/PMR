<?php

    if(isset($_GET['id'])){
        $idx = $_GET['id'];
        $query = mysqli_query($con,"SELECT pmr_table.pmr_id, pmr_table.pr_no, pmr_table.po_no,  pmr_table.date, pmr_table.pcategory_id, pmr_table.particulars, 
        pmr_table.amount, pmr_table.src_fund, pmr_table.employee_id, pmr_table.pstatus_id, pmr_table.remarks FROM pmr_table LEFT JOIN employee ON 
        pmr_table.employee_id=employee.employee_id INNER JOIN office ON employee.office_id=office.office_id INNER JOIN procurement_category ON 
        procurement_category.pcategory_id=pmr_table.pcategory_id  INNER JOIN po_status ON po_status.pstatus_id=pmr_table.pstatus_id WHERE pmr_id='$idx'");
    include('action/admin/edit-purchase.php');
    }
    
?>