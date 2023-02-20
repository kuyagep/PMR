<?php
    $idx ="";
    $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM employee WHERE employee_id='$idx'");
    //include('action/admin/edit-employee.php');
?>
<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Employee</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="employee">Employee</a></li>
                    <li class="breadcrumb-item active">Edit Employee</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- End Content Header -->

<!-- Main content -->
<?php

$view = mysqli_fetch_array($query);

    if($view['picture']==""){
        $img = "default2-1-1.jpg";
    }else{
        $img = $view['picture'];
    }
                            
?>


<section>

    <div class="container">
        <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
                <?php 
                     $result = mysqli_query($con,"SELECT * FROM position;");
                     $rowCount = mysqli_num_rows($result);
                     if($rowCount > 0){
                         while($row = mysqli_fetch_assoc($result)){
                            if($row['position_id'] == $view['position_id']){
                                echo $row['position_name'];
                            }
                         }
                    }
                ?>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-7">
                        <h2 class="lead"><b>
                                <?php 
                     $result = mysqli_query($con,"SELECT * FROM employee;");
                     $rowCount = mysqli_num_rows($result);
                     if($rowCount > 0){
                         while($row = mysqli_fetch_assoc($result)){
                            if($row['employee_id'] == $view['employee_id']){
                                echo $row['firstname'] ." ".$row['lastname'];
                            }
                         }
                    }
                ?>

                            </b></h2>
                        <!-- <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover -->
                        </p>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Office:

                                <?php 
                                $result = mysqli_query($con,"SELECT * FROM office;");
                                $rowCount = mysqli_num_rows($result);
                                if($rowCount > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        if($row['office_id'] == $view['office_id']){
                                            echo $row['office_name'];
                                        }
                                    }
                                }
                            ?>
                            </li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Contact #:
                                <?php echo $view['emp_contact_no']; ?>
                            </li>
                            <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> Email Address:
                                <?php echo $view['emp_email_add']; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-5 text-center">
                        <img src="dist/img/users/<?php echo $img; ?>" style="width: 100px;" alt="user-avatar"
                            class="img-circle img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-right">
                    <a href="#" class="btn btn-sm bg-green">
                        <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-danger">
                        <i class="fas fa-user"></i> View Profile
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-outline card-red">
                    <div class="card-header">
                        <h3 class="card-title"> <i class="fa-solid fa-pen-to-square mr-2"></i> <STRONG>List
                                of
                                Purchase Order</STRONG></h3>

                        <button type="button" class="btn bg-gradient-danger float-right" data-toggle="modal"
                            data-target="#add-purchase-order">
                            <i class="fas fa-solid fa-tag mr-2"></i>
                            Add Purchase Order
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

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
                                <th>Office/Section</th>
                                <th>Delivered</th>
                                <th>Remarks</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = mysqli_query($con,"SELECT pmr_table.pmr_id, pmr_table.pr_no, procurement_category.category_name, pmr_table.po_no, pmr_table.particulars, 
                                pmr_table.amount, pmr_table.src_fund, employee.firstname, employee.lastname, office.office_name, po_status.pstatus_name, pmr_table.remarks 
                                FROM pmr_table LEFT JOIN employee ON pmr_table.employee_id=employee.employee_id INNER JOIN office ON employee.office_id=office.office_id 
                                INNER JOIN procurement_category ON procurement_category.pcategory_id=pmr_table.pcategory_id  INNER JOIN po_status 
                                ON po_status.pstatus_id=pmr_table.pstatus_id WHERE pmr_table.employee_id='$idx' ORDER BY `pmr_table`.`updated_at` DESC;");
                                $count=1;
                                $rowCount = mysqli_num_rows($result);
                                if($rowCount > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                         $id=$row['pmr_id'];
                                         ?>
                                <tr>
                                    <td><?php echo $row['pr_no']; ?></td>
                                    <td><?php echo $row['po_no']; ?></td>
                                    <td><?php echo $row['category_name']; ?></td>
                                    <td><?php echo $row['particulars']; ?></td>
                                    <td><?php 
                                    echo number_format($row['amount'], 2);
                                    ?></td>
                                    <td><?php echo $row['src_fund']; ?></td>

                                    <td><?php echo $row['office_name']; ?></td>
                                    <td>
                                        <?php 
                                            if ($row['pstatus_name']=="Delivered") {
                                                # code...
                                            }
                                        ?>
                                        <span class="badge badge-primary"><?php echo $row['pstatus_name']; ?></span>
                                    </td>
                                    <td><?php echo $row['remarks']; ?></td>

                                    <td style='width: 100px;'>
                                        <a href="index.php?page=pmr-edit&id=<?php echo $id; ?>" class="text-primary "
                                            title="Edit">
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
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

</section>
<section class="content">
    <div class="container-fluid">

    </div>
</section>
</div>
</section>
<!-- /.content -->

<!-- /.content-wrapper -->

<script>
$('.file-upload').file_upload();

function delete_employee(data_id) {
    //alert('ok');
    // window.location = ("action/admin/delete-employee.php?id=" + data_id);
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this Data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {

            window.location = ("action/admin/delete-employee.php?id=" + data_id);
            // Swal.fire(
            //             'Deleted!',
            //             'The data has been deleted.',
            //             'success'
            // )
        }

    })
}
</script>