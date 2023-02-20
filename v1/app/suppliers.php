<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Supplier</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Suppliers</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- End Content Header -->

<!-- Main content -->
<!-- Add Modal -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="action/admin/add-supplier.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Suppliers</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- form -->
                    <div class="form-group row">
                        <label for="supplier" class="col-sm-3 col-form-label">Supplier <span class="text-danger">
                                *</span> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="supplier" name="supplier"
                                placeholder="Supplier Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact" class="col-sm-3 col-form-label">Contact No. <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact" name="contact"
                                placeholder="Contact No." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email Address</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email Address">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-right">
                    <button type="button" class="btn btn-danger " data-dismiss="modal"> Cancel </button>
                    <button type="submit" name="add-supplier" class="btn btn-primary"> Add </button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php 
    
    if(isset($_SESSION['status']))
    {
        ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey !</strong> <?= $_SESSION['status']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php 
        unset($_SESSION['status']);
    }

?>
                <div class="card card-outline card-red">
                    <div class="card-header">
                        <h3 class="card-title"> <i class="fa-solid fa-pen-to-square mr-2"></i> <STRONG>List
                                of
                                Suppliers</STRONG></h3>

                        <button type="button" class="btn btn-info float-right" data-toggle="modal"
                            data-target="#addModal"> <i class="fas fa-solid fa-store"></i>
                            Add Supplier
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="dataTable" class="table table-hover table-striped " width="100%" cellspacing="0"">
                            <thead class=" thead-dark">
                            <tr>
                                <th>No.</th>
                                <th>Supplier</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Email Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = mysqli_query($con,"SELECT * FROM `suppliers`");
                                $count=1;
                                $rowCount = mysqli_num_rows($result);
                                if($rowCount > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                         $id=$row['supplier_id'];
                                         ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $row['supplier_name']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['contact_no']; ?></td>
                                    <td><?php echo $row['email_add']; ?></td>
                                    <td style='width: 100px;'>
                                        <a href="index.php?page=supplier-edit&& id=<?php echo $id; ?>"
                                            class=" btn btn-sm btn-info">
                                            <i class="fas fa-solid fa-pen"></i>
                                        </a>

                                        <a onclick="delete_supplier('<?php echo $id; ?>')"
                                            class=" btn btn-sm btn-danger"> <i class="fas fa-solid fa-trash"></i></a>
                                    </td>

                                </tr>
                                <?php
                                    $count++;
                                }
                                    
                                }else{
                                    echo "No Records Found";
                                }
                                
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
<!-- /.content-wrapper -->

<script>
function delete_supplier(data_id) {
    // alert('ok');
    //window.location = ("action/admin/delete-employee.php?id=" + data_id);
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
            window.location = ("action/admin/delete-supplier.php?id=" + data_id);
        }

    })


}
</script>