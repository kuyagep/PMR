<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Item</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="items">Item</a></li>
                    <li class="breadcrumb-item active">Edit Item</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- End Content Header -->

<!-- Main content -->
<?php
//   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//         header('Location: ../index.php?session=expired');
//     }
    
    //$query = mysqli_query($con,"SELECT employee.employee_id, employee.firstname, employee.middlename, employee.lastname, employee.emp_contact_no, employee.emp_email_add, position.position_name AS position, office.office_name AS office, role.role_desc AS role FROM `employee` LEFT JOIN position ON employee.position_id = position.position_id 
                              //  LEFT JOIN office ON employee.office_id = office.office_id LEFT JOIN role ON employee.role_id = role.role_id WHERE employee_id='".$idz."'");
$view = mysqli_fetch_array($query);
?>

<section>
    <div class="container py-3">
        <form action="action/admin/update-item.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4 card-outline card-red">
                        <div class="card-header">
                            <h3>Edit Item</h3>
                        </div>
                        <div class="card-body">
                            <!-- <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Firstname Middlename Lastname</p>
                            </div>
                        </div> -->
                            <input type="hidden" name="id" value="<?php echo $view['item_id']; ?>">
                            <div class="form-group row">
                                <label for="input-file-now-custom-1" class="col-sm-3 col-form-label">Upload
                                    Picture</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control file-upload" id="customFile"
                                        name="picture" />
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="item_name" class="col-sm-3 col-form-label">Item Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="item_name"
                                        value="<?php echo $view['item_name']; ?>" placeholder="Enter name" required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="item_desc" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="item_desc"
                                        value="<?php echo $view['item_desc']; ?>" placeholder="Description">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="item_serial" class="col-sm-3 col-form-label">Serial No.</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="item_serial"
                                        value="<?php echo $view['item_serial']; ?>" placeholder="Serial No." required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="item_model" class="col-sm-3 col-form-label">Model</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="item_model"
                                        value="<?php echo $view['item_model']; ?>" placeholder="Model">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="item_brand" class="col-sm-3 col-form-label">Brand</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="item_brand"
                                        value="<?php echo $view['item_brand']; ?>" placeholder="Brand" required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="unit" class="col-sm-3 col-form-label">Unit</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="unit"
                                        value="<?php echo $view['unit']; ?>" placeholder="Enter Unit ex. pc, unit"
                                        required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="item_amount" class="col-sm-3 col-form-label">Amount</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="item_amount"
                                        value="<?php echo $view['item_amount']; ?>" placeholder="Amount" required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="item_purdate" class="col-sm-3 col-form-label">Aquired</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="item_purdate"
                                        value="<?php echo $view['item_purdate']; ?>" placeholder="Date Aquired"
                                        required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="supplier" class="col-sm-3 col-form-label">Supplier</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" id="supplier" name="supplier" required>
                                        <option value="" selected>Choose Supplier...
                                        </option>
                                        <?php
                                    $result = mysqli_query($con,"SELECT * FROM suppliers;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                        <option value="<?php echo $row['supplier_id'];?>"
                                            <?php if($row['supplier_id'] == $view['supplier_id']){echo 'selected';} ?>>
                                            <?php echo $row['supplier_name']; ?>
                                        </option>

                                        <?php   }
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="category" class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" id="category" name="category" required>
                                        <option selected>Choose Office...
                                        </option>
                                        <?php
                                    $result = mysqli_query($con,"SELECT * FROM category;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                        <option value="<?php echo $row['category_id'];?>"
                                            <?php if($row['category_id'] == $view['category_id']){echo 'selected';} ?>>
                                            <?php echo $row['category_name']; ?>
                                        </option>

                                        <?php   }
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="condition" class="col-sm-3 col-form-label">Condition</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" id="condition" name="condition" required>
                                        <option value="" selected>Choose Condition...</option>
                                        <?php
                                        $result = mysqli_query($con,"SELECT * FROM con;");
                                        $rowCount = mysqli_num_rows($result);
                                        if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                        <option value="<?php echo $row['con_id'];?>"
                                            <?php if($row['con_id'] == $view['con_id']){echo 'selected';} ?>>
                                            <?php echo $row['con_desc']; ?>
                                        </option>

                                        <?php   }
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="status" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" id="status" name="status" required>
                                        <option value="" selected>Choose Status...</option>
                                        <?php
                                        $result = mysqli_query($con,"SELECT * FROM item_status;");
                                        $rowCount = mysqli_num_rows($result);
                                        if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                        <option value="<?php echo $row['status_id'];?>"
                                            <?php if($row['status_id'] == $view['status_id']){echo 'selected';} ?>>
                                            <?php echo $row['status_desc']; ?>
                                        </option>

                                        <?php   }
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="updateItem" class="btn btn-primary float-right ml-3 ">
                                <i class="fas fa-regular fa-floppy-disk mr-1"></i> Update </button>
                            <a href="items"> <button type=" button" class="btn btn-warning float-right ml-3 "> <i
                                        class="fas fa-solid fa-arrows-rotate mr-1"></i>
                                    Back
                                </button>
                            </a>

                        </div>
                    </div>


                </div>

                <div class="col-lg-4">
                    <!-- Application buttons -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Action Section</h3>
                        </div>
                        <div class="card-body">
                            <p>Quick Access</p>
                            <a class="btn btn-app" data-toggle="modal" data-target="#issuance">
                                <i class="fas fa-share-square"></i> Issue Item
                            </a>
                            <a class="btn btn-app" data-toggle="modal" data-target="#employee">
                                <i class="fas fa-undo-alt"></i> Add Employee
                            </a>
                            <a class="btn btn-app" data-toggle="modal" data-target="#addItems">
                                <i class="fas fa-edit"></i> Add Item
                            </a>

                            <p>Quick Access</p>
                            <a class="btn btn-app bg-secondary">
                                <span class="badge bg-warning">New</span>
                                <i class="fas fa-database"></i> Backup DB
                            </a>
                            <a class="btn btn-app bg-purple">
                                <span class="badge bg-success">300</span>
                                <i class="fas fa-barcode"></i> Items
                            </a>
                            <a class="btn btn-app bg-success">
                                <span class="badge bg-purple">891</span>
                                <i class="fas fa-users"></i> Users
                            </a>
                            <a class="btn btn-app bg-danger">
                                <span class="badge bg-teal">67</span>
                                <i class="fas fa-inbox"></i> Issuance
                            </a>
                            <a class="btn btn-app bg-warning">
                                <span class="badge bg-info">12</span>
                                <i class="fas fa-envelope"></i> Inbox
                            </a>
                            <a class="btn btn-app bg-info">
                                <span class="badge bg-danger">531</span>
                                <i class="fas fa-heart"></i> Likes
                            </a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </form>
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