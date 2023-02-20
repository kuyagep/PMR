<?php
    if(isset($_GET['error'])){
        echo "<script>
    alert('Choose Report');
</script>";
    }
?>

<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Reports</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Reports</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- End Content Header -->

<!-- /.content -->
<!-- /.content-wrapper -->
<div class="row">
    <div class="col-4"></div>
    <div class="col-4 text-center">
        <form method="GET" action="action/admin/print.php">
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <!-- <label class="mr-sm-2 sr-only" for="generateReport">Preference</label> -->
                    <select class="custom-select mr-sm-2" name="action" id="generateReport">
                        <option value="" selected>Choose Reports...</option>
                        <option value="1">Issued Items</option>
                        <option value="2">Items</option>
                        <option value="3">Employee</option>
                    </select>
                </div>

                <div class="col-auto my-1">
                    <button type="submit" class="btn btn-info">
                        <i class="fas fa-solid fa-print mr-1"></i>Generate Report</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-4"></div>
</div>