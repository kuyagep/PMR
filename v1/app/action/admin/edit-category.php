<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="category">Category</a></li>
                    <li class="breadcrumb-item active">Edit Category</li>
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
    <div class=" container py-5">
    <form action="action/admin/update-category.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4 card-outline card-red">
                    <div class="card-header">
                        <h3>Edit Category</h3>
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
                        <input type="hidden" name="id" value="<?php echo $view['category_id']; ?>">

                        <div class="form-group row">
                            <label for="category" class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="category"
                                    value="<?php echo $view['category_name']; ?>" placeholder="Category" required>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" name="updateCategory" class="btn btn-primary float-right ml-3 ">
                            <i class="fa-regular fa-floppy-disk mr-1"></i> Update </button>
                        <a href="category">
                            <button type="button" class="btn btn-warning float-right ml-3 "> <i
                                    class="fa-solid fa-arrows-rotate mr-1"></i>
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

            window.location = ("action/admin/delete-category.php?id=" + data_id);
            // Swal.fire(
            //             'Deleted!',
            //             'The data has been deleted.',
            //             'success'
            // )
        }

    })
}
</script>