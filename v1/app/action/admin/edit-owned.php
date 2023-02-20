<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Owned Items</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="owned-items">Owned Items</a></li>
                    <li class="breadcrumb-item active">View Owned Items</li>
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
        <form action="action/admin/update-owned.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4 card-outline card-red">
                        <div class="card-header">
                            <h3>Owned Items</h3>
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
                            <input type="hidden" name="id" value="<?php echo $view['issued_item']; ?>">

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><b>Issuance Code</b></p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><b><?php
                                        echo $view['issuance_code'];
                                ?></b></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><b>Issued Date</b></p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                        echo $view['issued_date'];
                                ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><b>Item Name</b></p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                        echo $view['item_name'];
                                ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><b>Description</b></p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                        echo $view['item_desc'];
                                ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><b>Serial No.</b></p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                        echo $view['item_serial'];
                                ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><b>Brand</b></p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                        echo $view['item_brand'];
                                ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><b>Amount</b></p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                        echo $view['item_amount'];
                                ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"><b>Condition</b></p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                        echo $view['con_desc'];
                                ?></p>
                                </div>
                            </div>

                            <hr>
                            <div class="form-group row">
                                <label for="status" class="col-sm-3 col-form-label">Request Status</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" id="status" name="status" required>
                                        <option selected>Choose Status...
                                        </option>
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
                                <i class="fas fa-save"></i> Request </button>
                            <a href="owned-items">
                                <button type="button" class="btn btn-warning float-right ml-3 "> <i
                                        class="fas fa-arrow-left"></i>
                                    Back
                                </button>
                            </a>


                        </div>
                    </div>


                </div>

                <!-- <div class="col-lg-4">
                    <div class="card mb-4 card-outline card-red">
                        <div class="card-body text-center ">
                            Sample
                        </div>
                    </div>
                </div> -->
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