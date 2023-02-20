<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">PMR</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="user-dashboard">Home</a></li>
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
                        <h4>Purchase Orders</h4>
                    </div><!-- /.card-header -->
                    <div class="card-body">
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
                                <th>Status</th>
                                <th>Remarks</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    
                                    $result = mysqli_query($con,"SELECT pmr_table.pmr_id, pmr_table.pr_no, procurement_category.category_name, pmr_table.po_no, 
                                    pmr_table.particulars, pmr_table.amount, pmr_table.src_fund, employee.firstname, employee.lastname, office.office_name, 
                                    po_status.pstatus_name, pmr_table.remarks FROM pmr_table LEFT JOIN employee ON pmr_table.employee_id=employee.employee_id 
                                    INNER JOIN office ON employee.office_id=office.office_id INNER JOIN procurement_category ON 
                                    procurement_category.pcategory_id=pmr_table.pcategory_id  INNER JOIN po_status ON po_status.pstatus_id=pmr_table.pstatus_id 
                                    WHERE pmr_table.employee_id= ".$_SESSION["role_id"]." ORDER BY `pmr_table`.`updated_at` DESC;");
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
                                        <td><?php  echo number_format($row['amount'], 2); ?></td>
                                        <td><?php echo $row['src_fund']; ?></td>
                                        <td> <?php if ($row['pstatus_name']=="Delivered") {
                                                        # code...
                                                        }?>
                                            <span class="badge badge-primary"><?php echo $row['pstatus_name']; ?></span>
                                        </td>
                                        <td><?php echo $row['remarks']; ?></td>
                                    </tr>
                                <?php
                                    $count++;
                                }
                                    
                                }
                                
                            ?>
                            </tbody>
                        </table>
                        <!-- /.tab-pane -->


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