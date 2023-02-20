<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">My Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php?page=employee">Profile</a></li>
                    <li class="breadcrumb-item active">My Profile</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- End Content Header -->

<!-- Main content -->
<?php
$view = mysqli_fetch_array($query);
?>

<section ">
<!-- style=" background-color: #eee; -->
    <div class="container py-5">
        <form action="action/admin/update-profile.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user ">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <?php 
                                if($view['picture']==""){
                                    $img = "default2-1-1.jpg";
                                }else{
                                    $img = $view['picture'];
                                }
                            ?>
                        <div class="widget-user-header text-white"
                            style="background: url('dist/img/photo1.png') center center;">
                            <h3 class="widget-user-username text-right">
                                <?php echo $view['firstname']." ".$view['lastname']; ?></h3>
                            <h5 class="widget-user-desc text-right"><?php
                                    $result = mysqli_query($con,"SELECT * FROM position;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>

                                <?php if($row['position_id'] == $view['position_id']){echo $row['position_name'];} ?>
                                <?php   }
                                    }
                                ?></h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="dist/img/users/<?php echo $img; ?>" alt="User Avatar">
                        </div>
                        <div class="card-footer p-0">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Owned Items <span class="float-right badge bg-danger">
                                            <?php
                                            $sql = "SELECT * from issuance WHERE issued_to='".$view['employee_id']."'";
                                            if ($result = mysqli_query($con, $sql)) {
                                                // Return the number of rows in result set
                                                $rowcount = mysqli_num_rows( $result );
                                                echo $rowcount;
                                            }
                                    ?>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Total Amount <span class="float-right badge bg-warning">

                                            <?php
                                        $result = mysqli_query($con,"SELECT issuance.issued_id, issuance.issuance_code, issuance.issued_date, items.item_amount, employee.firstname, employee.lastname, office.office_name, category.category_name, con.con_desc, item_status.status_desc FROM issuance INNER JOIN items ON issuance.issued_item=items.item_id LEFT JOIN employee ON issuance.issued_to=employee.employee_id INNER JOIN office ON employee.office_id=office.office_id INNER JOIN con ON items.con_id=con.con_id INNER JOIN category ON items.category_id=category.category_id  INNER JOIN item_status ON items.status_id=item_status.status_id  WHERE issued_to ='".$view['employee_id']."' ORDER BY `issuance`.`issued_id` DESC;");
                                            if ($result) {
                                                // Return the number of rows in result set
                                                $rowcount = mysqli_num_rows( $result );
                                                $amount = 0;
                                                while($row = mysqli_fetch_assoc($result)){
                                                    $amount = $amount + $row['item_amount'];

                                                }
                                                echo $amount;
                                            }
                                        ?>
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4 card-outline card-red">
                        <div class="card-header">
                            <h3>Edit Profile</h3>
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
                            <input type="hidden" name="id" value="<?php echo $view['employee_id']; ?>">
                            <div class="form-group row">
                                <label for="input-file-now-custom-1" class="col-sm-3 col-form-label">Upload
                                    Profile</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control file-upload" id="customFile"
                                        name="picture" />
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="firstname" class="col-sm-3 col-form-label">Firstname</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="firstname"
                                        value="<?php echo $view['firstname']; ?>" placeholder="Firstname" required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="middlename" class="col-sm-3 col-form-label">Middlename</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="middlename"
                                        value="<?php echo $view['middlename']; ?>" placeholder="Middlename">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="lastname" class="col-sm-3 col-form-label">Lastname</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="lastname"
                                        value="<?php echo $view['lastname']; ?>" placeholder="lastname" required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username"
                                        value="<?php echo $view['username']; ?>" placeholder="Username" required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="change_password" class="col-sm-3 col-form-label">Change Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="change_password"
                                        value="" placeholder="Enter New Password">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="contact" class="col-sm-3 col-form-label">Contact No.</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="contact"
                                        value="<?php echo $view['emp_contact_no']; ?>" placeholder="Contact No.">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email"
                                        value="<?php echo $view['emp_email_add']; ?>" placeholder="Email Address"
                                        required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="position" class="col-sm-3 col-form-label">Position</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" id="position" name="position" required>
                                        <option value="" selected>Choose Position...
                                        </option>
                                        <?php
                                    $result = mysqli_query($con,"SELECT * FROM position;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                        <option value="<?php echo $row['position_id'];?>"
                                            <?php if($row['position_id'] == $view['position_id']){echo 'selected';} ?>>
                                            <?php echo $row['position_name']; ?>
                                        </option>

                                        <?php   }
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="office" class="col-sm-3 col-form-label">Office</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" id="office" name="office"
                                        value="<?php echo $view['office']; ?>" required>
                                        <option selected>Choose Office...
                                        </option>
                                        <?php
                                    $result = mysqli_query($con,"SELECT * FROM office;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                        <option value="<?php echo $row['office_id'];?>"
                                            <?php if($row['office_id'] == $view['office_id']){echo 'selected';} ?>>
                                            <?php echo $row['office_name']; ?>
                                        </option>

                                        <?php   }
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><b>Role</b></p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                        $result = mysqli_query($con,"SELECT * FROM role;");
                                        $rowCount = mysqli_num_rows($result);
                                        if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ 
                                            if($row['role_id'] == $view['role_id']){echo $row['role_desc'];}
                                            ?>

                                        <?php   }
                                    }
                                ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="updateEmployee" class="btn btn-primary float-right ml-3 ">
                                <i class="fa-regular fa-floppy-disk mr-1"></i> Update </button>
                            <!-- <button type="button" class="btn btn-warning float-right ml-3 "> <i
                                    class="fa-solid fa-arrows-rotate mr-1"></i>
                                Reset Password
                            </button> -->

                        </div>
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