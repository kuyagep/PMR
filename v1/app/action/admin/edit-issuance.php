<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Issuance</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="issued-items">Issuance</a></li>
                    <li class="breadcrumb-item active">View Issuance</li>
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
                            <h3>Edit Issuance</h3>
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
                            <input type="hidden" name="id" value="<?php echo $view['issued_id']; ?>">
                            <div class="form-group row">
                                <label for="item_name" class="col-sm-3 col-form-label">Issuance Code</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="code"
                                        value="<?php echo $view['issuance_code']; ?>" disabled>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="item_name" class="col-sm-3 col-form-label">Issued Date</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="date"
                                        value="<?php echo $view['issued_date']; ?>" disabled>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="item" class="col-sm-3 col-form-label">Item Name</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" id="item" name="item" required>
                                        <option selected>Choose Item...
                                        </option>
                                        <?php
                                    $result = mysqli_query($con,"SELECT * FROM items;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                        <option value="<?php echo $row['item_id'];?>"
                                            <?php if($row['item_id'] == $view['issued_item']){echo 'selected';} ?>>
                                            <?php echo $row['item_name']; ?>
                                        </option>

                                        <?php   }
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="employee" class="col-sm-3 col-form-label">Accountable</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" id="employee" name="employee" required>
                                        <option selected>Choose Employee...
                                        </option>
                                        <?php
                                    $result = mysqli_query($con,"SELECT * FROM employee;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                        <option value="<?php echo $row['employee_id'];?>"
                                            <?php if($row['employee_id'] == $view['issued_to']){echo 'selected';} ?>>
                                            <?php echo $row['firstname']." ".$row['lastname']; ?>
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
                                <i class="fas fa-save"></i> Update </button>
                            <a href="print-issuance.php?id=<?php echo $view['issued_id']; ?>" rel="noopener"
                                target="_blank" class="btn btn-info float-right ml-3 ">
                                <i class="fas fa-solid fa-print mr-1"></i>
                                Print
                            </a>

                            <a href="index.php?page=issued-items">
                                <button type="button" class="btn btn-warning float-right ml-3 "> <i
                                        class="fas fa-arrow-left"></i>
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