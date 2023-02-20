<?php
    include('../conf/config.php');

    if(isset($_GET['id'])){
        $idx = $_GET['id'];
        $query = mysqli_query($con,"SELECT issuance.issued_id, issuance.issuance_code, issuance.issued_item, 
        issuance.issued_to,  issuance.issued_date, items.item_name, items.item_serial, items.item_desc,  
        items.item_amount, employee.firstname, employee.lastname, office.office_name, category.category_name, 
        con.con_desc, suppliers.supplier_name, suppliers.address FROM issuance 
        INNER JOIN items ON issuance.issued_item=items.item_id 
        LEFT JOIN employee ON issuance.issued_to=employee.employee_id 
        INNER JOIN office ON employee.office_id=office.office_id 
        INNER JOIN con ON items.con_id=con.con_id 
        INNER JOIN category ON items.category_id=category.category_id 
        INNER JOIN suppliers ON items.supplier_id = suppliers.supplier_id
        WHERE issued_id='$idx'");
    }
    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $query = mysqli_query($con,"SELECT issuance.issued_id, issuance.issuance_code, issuance.issued_item, 
        issuance.issued_to,  issuance.issued_date, items.item_name, items.item_serial, items.item_desc,  
        items.item_amount, employee.firstname, employee.lastname, office.office_name, category.category_name, 
        con.con_desc, suppliers.supplier_name, suppliers.address FROM issuance 
        INNER JOIN items ON issuance.issued_item=items.item_id 
        LEFT JOIN employee ON issuance.issued_to=employee.employee_id 
        INNER JOIN office ON employee.office_id=office.office_id 
        INNER JOIN con ON items.con_id=con.con_id 
        INNER JOIN category ON items.category_id=category.category_id 
        INNER JOIN suppliers ON items.supplier_id = suppliers.supplier_id
        WHERE issuance_code='$code'");
    }
    
    $view = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print Issuance of <?php echo $view['item_name']; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body>
    <div class="container m-10">
        <!-- Main content -->
        <section class="container">
            <!-- title row -->
            <div class="row">
                <div class="col-4 text-center"> <br>
                    <img src="dist/img/kagawaran.png" alt="Visa" width="100px">
                </div>
                <div class="col-4"> <br>
                    <h4 class="text-center">Department of Education</h4>
                    <h3 class="text-center"><b>Division of Davao del Sur</b></h3> <br> <br>
                    <h1 class="text-center"><b>Issuance Slip</b></h1>
                </div>
                <!-- /.col -->
                <div class="col-4 text-center"> <br>
                    <img src="dist/img/division.png" alt="Visa" width="100px">
                </div>
            </div>

            <!-- info row -->
            <div class="row ">
                <div class="col-sm-8">
                    <b>Office Name : </b> <?php echo $view['office_name']; ?><br>
                </div>

                <div class="col-sm-4">
                    <b>Issuance Code : <?php echo $view['issuance_code']; ?></b><br>
                    <b>Issued Date : </b> <?php echo $view['issued_date']; ?><br> <br>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Qty</th>
                                <th>Item Name</th>
                                <th>Serial #</th>
                                <th>Item Description</th>
                                <th>Unit Cost</th>
                                <th>Estimated Useful Life</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><?php echo $view['item_name']; ?></td>
                                <td><?php echo $view['item_serial']; ?></td>
                                <td><?php echo $view['item_desc']; ?></td>
                                <td><?php echo $view['item_amount']; ?></td>
                                <td>3 years</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <hr>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <p>ACCOUNTABILITY OVER SEMI-EXPENDABLE PROPERTY. Inventory Custodianship Slip (ICS) shall be issued
                        to end-user of Semi-Expendable Property to establish accountability.
                        Accountability shall be extinguished upon return of the item to the Division Property/Supply
                        Unit or in case of loss, upon approval of the Relief from Property Accountability.</p>
                </div>
            </div>
            <div class="row mb-5">
                <!-- info row -->

                <div class="col-8">
                    <b>Date Acquired : </b><?php echo $view['issued_date']; ?><br>
                    <b>Remarks/Condition : </b> <?php echo $view['con_desc']; ?><br>
                </div>

                <div class="col-4">
                    <b>Supplier : </b><?php echo $view['supplier_name']; ?><br>
                    <b>Address : </b> <?php echo $view['address']; ?><br> <br>
                </div>
                <!-- /.col -->
            </div>

            <div class="row">
                <!-- info row -->
                <div class="col-6">
                    Received form:<br> <br>
                    <h5 class="text-center"><b>ROMEO M. YTING</b></h5>
                    <h6 class="text-center">Supply Officer</h6>
                    <br> <br>
                    <h5 class="text-center"><b><?php echo date('M d, Y'); ?></b></h5>
                    <h6 class="text-center">Date</h6>
                </div>

                <div class="col-6">
                    Received by:<br> <br>
                    <h5 class="text-center"><b><?php echo $view['firstname']." ".$view['lastname']; ?></b></h5>
                    <h6 class="text-center">Job Order</h6>
                    <br> <br>
                    <h5 class="text-center"><b><?php echo date('M d, Y'); ?></b></h5>
                    <h6 class="text-center">Date</h6>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
    window.addEventListener("load", window.print());
    </script>