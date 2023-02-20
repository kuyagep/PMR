<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Employee</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Employee</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- End Content Header -->

<!-- Main content -->
<!-- Add Modal -->
<div class="modal fade" id="employee">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="action/admin/add-employee.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Create Employee Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>System:</strong> Default Username and Password is your Email Address.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- form -->
                    <div class="form-group row">
                        <label for="firstname" class="col-sm-3 col-form-label">Firstname <span class="text-danger">
                                *</span> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                placeholder="Firstname" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="middlename" class="col-sm-3 col-form-label">M.N.</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="middlename" name="middlename"
                                placeholder="Middlename">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-sm-3 col-form-label">Lastname <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_no" class="col-sm-3 col-form-label">Contact</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact_no" name="contact_no"
                                placeholder="Contact No">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position" class="col-sm-3 col-form-label">Position <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="position" name="position" required>
                                <option value="" selected>Choose Position...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM position;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['position_id']; ?>">
                                    <?php echo $row['position_name']; ?>
                                </option>

                                <?php   }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="division" class="col-sm-3 col-form-label">Division <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="division" name="division" required>
                                <option value="" selected>Choose Division...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM division;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['division_id']; ?>">
                                    <?php echo $row['division_name']; ?>
                                </option>

                                <?php   }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="office" class="col-sm-3 col-form-label">Office <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="office" name="office" required>
                                <option value="" selected>Choose Office...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM office;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['office_id']; ?>">
                                    <?php echo $row['office_name']; ?>
                                </option>

                                <?php   }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-3 col-form-label">Role <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="role" name="role" required>
                                <option value="" selected>Choose Role...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM role;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ 
                                            if($row['role_id'] > 1){
                                            
                                            ?>
                                <option value="<?php echo $row['role_id']; ?>">
                                    <?php echo $row['role_desc']; ?>
                                </option>

                                <?php 
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>


                </div>
                <div class="modal-footer justify-content-right">
                    <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button>
                    <button type="submit" name="add-employee" class="btn btn-primary addEmployeeAlert">Create</button>
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
                                Employee</STRONG></h3>

                        <button type="button" class="btn btn-info float-right" data-toggle="modal"
                            data-target="#employee"> <i class="fas fa-solid fa-user-plus"></i>
                            Add Employee
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="dataTable" class="table table-hover table-responsive table-striped " width="100%" cellspacing="0"">
                            <thead class=" thead-dark">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Division</th>
                                <th>Role</th>
                                <th style='width: 1000px;'>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = mysqli_query($con,"SELECT employee.employee_id, employee.firstname, employee.middlename, employee.lastname, employee.emp_contact_no, employee.emp_email_add, position.position_name AS position, office.office_name AS office, division.division_name, role.role_desc AS role FROM `employee` LEFT JOIN position ON employee.position_id = position.position_id 
                                LEFT JOIN office ON employee.office_id = office.office_id INNER JOIN division ON employee.division_id = division.division_id LEFT JOIN role ON employee.role_id = role.role_id ORDER BY employee.employee_id DESC");
                                $count=1;
                                $rowCount = mysqli_num_rows($result);
                                if($rowCount > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                         $id=$row['employee_id'];
                                         ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                    <td><?php echo $row['emp_contact_no']; ?></td>
                                    <td><?php echo $row['emp_email_add']; ?></td>
                                    <td><?php echo $row['position']; ?></td>
                                    <td><?php echo $row['office']; ?></td>
                                    <td><?php echo $row['division_name']; ?></td>
                                    <td><?php echo $row['role']; ?></td>
                                    <td style='width: 1000px;'>
                                        <a href="index.php?page=employee-view&&id=<?php echo $id; ?>"
                                            class=" ">
                                            <i class="fas text-info fa-solid fa-info"></i>
                                        </a>
                                        <a href="index.php?page=employee-edit&&id=<?php echo $id; ?>"
                                            class="">
                                            <i class="fas fa-solid fa-pen text-warning ml-2"></i>
                                        </a>

                                        <a onclick="delete_employee('<?php echo $id; ?>')"
                                            class=""> <i class="fas fa-solid fa-trash text-danger ml-2"></i></a>
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
function delete_employee(data_id) {
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
            window.location = ("action/admin/delete-employee.php?id=" + data_id);
        }

    })


}
</script>