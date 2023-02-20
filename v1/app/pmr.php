<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">PMR</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">PMR</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- End Content Header -->

<!-- Main content -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                        <div class="float-left">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#osds" data-toggle="tab">OSDS</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#cid" data-toggle="tab">CID</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#sgod" data-toggle="tab">SGOD</a>
                                </li>
                            </ul>
                        </div>
                        <div class="float-right">
                            <button type="button" class="btn bg-gradient-primary float-right" data-toggle="modal"
                                data-target="#add-purchase-order">
                                <i class="fas fa-solid fa-tag mr-2"></i>
                                Add Purchase Order
                            </button>
                        </div>

                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="osds">
                                <!-- Content Here -->
                                <table id="dataTable" class="table table-hover table-responsive-lg " width="100%"
                                    cellspacing="0"">
                            <thead class=" thead-dark">
                                    <tr>
                                        <th>PR #</th>
                                        <th>PO #</th>
                                        <th>Category</th>
                                        <th>Particular</th>
                                        <th>Amount</th>
                                        <th>Source of Fund</th>
                                        <th>End User</th>
                                        <th>Office/Section</th>
                                        <th>Delivered</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                //SELECT pmr_table.particulars FROM pmr_table INNER JOIN employee ON `employee`.`office_id`=pmr_table.office_id INNER JOIN procurement_category ON procurement_category.pcategory_id=pmr_table.pcategory_id ORDER BY `pmr_table`.`updated_at` DESC;
                                $result = mysqli_query($con,"SELECT pmr_table.pmr_id, pmr_table.pr_no, procurement_category.category_name, pmr_table.po_no, pmr_table.particulars, pmr_table.amount, pmr_table.src_fund, employee.firstname, employee.lastname, office.office_name, po_status.pstatus_name, pmr_table.remarks FROM pmr_table LEFT JOIN employee ON pmr_table.employee_id=employee.employee_id INNER JOIN office ON employee.office_id=office.office_id INNER JOIN procurement_category ON procurement_category.pcategory_id=pmr_table.pcategory_id  INNER JOIN po_status ON po_status.pstatus_id=pmr_table.pstatus_id WHERE employee.division_id=1 ORDER BY `pmr_table`.`updated_at` DESC;");
                                $count=1;
                                $rowCount = mysqli_num_rows($result);
                                if($rowCount > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                         $id=$row['pmr_id'];
                                         ?>
                                        <tr>
                                            <td style='width: 100px;'><?php echo $row['pr_no']; ?></td>
                                            <td style='width: 100px;'><?php echo $row['po_no']; ?></td>
                                            <td><?php echo $row['category_name']; ?></td>
                                            <td><?php echo $row['particulars']; ?></td>
                                            <td><?php 
                                    echo number_format($row['amount'], 2);
                                    ?></td>
                                            <td><?php echo $row['src_fund']; ?></td>
                                            <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                            <td><?php echo $row['office_name']; ?></td>
                                            <td>
                                                <?php 
                                            if ($row['pstatus_name']=="Delivered") {
                                                # code...
                                            }
                                        ?>
                                                <span
                                                    class="badge badge-primary"><?php echo $row['pstatus_name']; ?></span>
                                            </td>
                                            <td><?php echo $row['remarks']; ?></td>

                                            <td style='width: 100px;'>
                                                <a href="index.php?page=pmr-edit&id=<?php echo $id; ?>"
                                                    class="text-primary " title="Edit">
                                                    <i class="fas fa-solid fa-pen"></i>
                                                </a>

                                                <a onclick="delete_item('<?php echo $id; ?>')" class="text-danger ml-2"
                                                    title="Delete">
                                                    <i class="fas fa-solid fa-trash"></i></a>
                                            </td>

                                        </tr>
                                        <?php
                                    $count++;
                                }
                                    
                                }
                                
                            ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="cid">
                                <!-- Content Here -->
                                <table id="dataTable" class="table table-hover table-responsive-lg " width="100%"
                                    cellspacing="0">
                            <thead class=" thead-dark">
                                    <tr>
                                        <th>PR #</th>
                                        <th>PO #</th>
                                        <th>Category</th>
                                        <th>Particular</th>
                                        <th>Amount</th>
                                        <th>Source of Fund</th>
                                        <th>End User</th>
                                        <th>Office/Section</th>
                                        <th>Delivered</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                //SELECT pmr_table.particulars FROM pmr_table INNER JOIN employee ON `employee`.`office_id`=pmr_table.office_id INNER JOIN procurement_category ON procurement_category.pcategory_id=pmr_table.pcategory_id ORDER BY `pmr_table`.`updated_at` DESC;
                                $result = mysqli_query($con,"SELECT pmr_table.pmr_id, pmr_table.pr_no, procurement_category.category_name, pmr_table.po_no, pmr_table.particulars, 
                                pmr_table.amount, pmr_table.src_fund, employee.firstname, employee.lastname, office.office_name, po_status.pstatus_name, pmr_table.remarks 
                                FROM pmr_table LEFT JOIN employee ON pmr_table.employee_id=employee.employee_id INNER JOIN office ON employee.office_id=office.office_id 
                                INNER JOIN procurement_category ON procurement_category.pcategory_id=pmr_table.pcategory_id  INNER JOIN po_status ON 
                                po_status.pstatus_id=pmr_table.pstatus_id WHERE employee.division_id=2 ORDER BY `pmr_table`.`updated_at` DESC;");
                                $count=1;
                                $rowCount = mysqli_num_rows($result);
                                if($rowCount > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                         $id=$row['pmr_id'];
                                         ?>
                                        <tr>
                                            <td style='width: 100px;'><?php echo $row['pr_no']; ?></td>
                                            <td style='width: 100px;'><?php echo $row['po_no']; ?></td>
                                            <td><?php echo $row['category_name']; ?></td>
                                            <td><?php echo $row['particulars']; ?></td>
                                            <td><?php 
                                    echo number_format($row['amount'], 2);
                                    ?></td>
                                            <td><?php echo $row['src_fund']; ?></td>
                                            <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                            <td><?php echo $row['office_name']; ?></td>
                                            <td>
                                                <?php 
                                            if ($row['pstatus_name']=="Delivered") {
                                                # code...
                                            }
                                        ?>
                                                <span
                                                    class="badge badge-primary"><?php echo $row['pstatus_name']; ?></span>
                                            </td>
                                            <td><?php echo $row['remarks']; ?></td>

                                            <td style='width: 100px;'>
                                                <a href="index.php?page=pmr-edit&id=<?php echo $id; ?>"
                                                    class="text-warning " title="Edit">
                                                    <i class="fas fa-solid fa-pen"></i>
                                                </a>

                                                <a onclick="delete_item('<?php echo $id; ?>')" class="text-danger ml-2"
                                                    title="Delete">
                                                    <i class="fas fa-solid fa-trash"></i></a>
                                            </td>

                                        </tr>
                                        <?php
                                    $count++;
                                }
                                    
                                }
                                
                            ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="sgod">
                                <!-- Content Here -->
                                <table id="dataTable" class="table table-hover table-responsive-lg " width="100%"
                                    cellspacing="0"">
                            <thead class=" thead-dark">
                                    <tr>
                                        <th>PR #</th>
                                        <th>PO #</th>
                                        <th>Category</th>
                                        <th>Particular</th>
                                        <th>Amount</th>
                                        <th>Source of Fund</th>
                                        <th>End User</th>
                                        <th>Office/Section</th>
                                        <th>Delivered</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                //SELECT pmr_table.particulars FROM pmr_table INNER JOIN employee ON `employee`.`office_id`=pmr_table.office_id INNER JOIN procurement_category ON procurement_category.pcategory_id=pmr_table.pcategory_id ORDER BY `pmr_table`.`updated_at` DESC;
                                $result = mysqli_query($con,"SELECT pmr_table.pmr_id, pmr_table.pr_no, procurement_category.category_name, pmr_table.po_no, pmr_table.particulars, pmr_table.amount, pmr_table.src_fund, employee.firstname, employee.lastname, office.office_name, po_status.pstatus_name, pmr_table.remarks FROM pmr_table LEFT JOIN employee ON pmr_table.employee_id=employee.employee_id INNER JOIN office ON employee.office_id=office.office_id INNER JOIN procurement_category ON procurement_category.pcategory_id=pmr_table.pcategory_id  INNER JOIN po_status ON po_status.pstatus_id=pmr_table.pstatus_id WHERE employee.division_id=3 ORDER BY `pmr_table`.`updated_at` DESC;");
                                $count=1;
                                $rowCount = mysqli_num_rows($result);
                                if($rowCount > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                         $id=$row['pmr_id'];
                                         ?>
                                        <tr>
                                            <td style='width: 100px;'><?php echo $row['pr_no']; ?></td>
                                            <td style='width: 100px;'><?php echo $row['po_no']; ?></td>
                                            <td><?php echo $row['category_name']; ?></td>
                                            <td><?php echo $row['particulars']; ?></td>
                                            <td><?php 
                                    echo number_format($row['amount'], 2);
                                    ?></td>
                                            <td><?php echo $row['src_fund']; ?></td>
                                            <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                            <td><?php echo $row['office_name']; ?></td>
                                            <td>
                                                <?php 
                                            if ($row['pstatus_name']=="Delivered") {
                                                # code...
                                            }
                                        ?>
                                                <span
                                                    class="badge badge-primary"><?php echo $row['pstatus_name']; ?></span>
                                            </td>
                                            <td><?php echo $row['remarks']; ?></td>

                                            <td style='width: 100px;'>
                                                <a href="index.php?page=pmr-edit&id=<?php echo $id; ?>"
                                                    class="text-primary " title="Edit">
                                                    <i class="fas fa-solid fa-pen"></i>
                                                </a>

                                                <a onclick="delete_item('<?php echo $id; ?>')" class="text-danger ml-2"
                                                    title="Delete">
                                                    <i class="fas fa-solid fa-trash"></i></a>
                                            </td>

                                        </tr>
                                        <?php
                                    $count++;
                                }
                                    
                                }
                                
                            ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>




        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
<!-- /.content-wrapper -->

<script src="plugins/toastr/toastr.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<script>
function delete_item(data_id) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this Data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("action/admin/delete-purchase.php?id=" + data_id);
        }

    })


}
</script>