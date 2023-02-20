<?php

    if(isset($_GET['id'])){
        $idx = $_GET['id'];
        $query = mysqli_query($con,"SELECT issuance.issued_id, issuance.issuance_code, issuance.issued_item, 
        issuance.issued_to,  issuance.issued_date, items.item_name, items.item_serial, items.item_desc,  
        items.item_amount, employee.firstname, employee.lastname, office.office_name, category.category_name, 
        con.con_desc, con.con_id, suppliers.supplier_name, suppliers.address, item_status.status_id, items.item_brand FROM issuance 
        INNER JOIN items ON issuance.issued_item=items.item_id 
        LEFT JOIN employee ON issuance.issued_to=employee.employee_id 
        INNER JOIN office ON employee.office_id=office.office_id 
        INNER JOIN con ON items.con_id=con.con_id 
        INNER JOIN category ON items.category_id=category.category_id
        INNER JOIN item_status ON items.status_id=item_status.status_id 
        INNER JOIN suppliers ON items.supplier_id = suppliers.supplier_id WHERE issued_id='$idx'");
    include('action/admin/edit-owned.php');
    }
    
?>