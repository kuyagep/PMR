<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Items</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Items</li>
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
                <div class="card card-outline card-red">
                    <div class="card-header">
                        <h3 class="card-title"> <i class="fa-solid fa-pen-to-square mr-2"></i> <STRONG>List
                                of
                                Items</STRONG></h3>

                        <button type="button" class="btn btn-info float-right" data-toggle="modal"
                            data-target="#addItems">
                            <i class="fas fa-solid fa-tag mr-2"></i>
                            Add Property/Item
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="dataTable" class="table table-hover table-striped " width="100%" cellspacing="0"">
                            <thead class=" thead-dark">
                            <tr>
                                <th>No.</th>
                                <th>Item Name</th>
                                <th>Description</th>
                                <th>Unit</th>
                                <th>Amount</th>
                                <th>Supplier</th>
                                <th>Category</th>
                                <th>Condition</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = mysqli_query($con,"SELECT items.item_id, items.item_name, items.item_desc, items.unit, items.item_amount, items.item_purdate, suppliers.supplier_name AS supplier, category.category_name as category, con.con_desc AS con, item_status.status_desc FROM `items` LEFT JOIN suppliers ON items.supplier_id = suppliers.supplier_id LEFT JOIN category ON items.category_id = category.category_id LEFT JOIN con ON items.con_id = con.con_id LEFT JOIN item_status ON items.status_id = item_status.status_id ORDER BY items.item_id DESC;");
                                $count=1;
                                $rowCount = mysqli_num_rows($result);
                                if($rowCount > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                         $id=$row['item_id'];
                                         ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $row['item_name']; ?></td>
                                    <td><?php echo $row['item_desc']; ?></td>
                                    <td><?php echo $row['unit']; ?></td>
                                    <td><?php echo $row['item_amount']; ?></td>
                                    <td><?php echo $row['supplier']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><?php 
                                        if($row['con'] == "Working"){
                                            echo '<span class="float-center badge bg-success">'.$row['con'].'</span>';
                                        }else{
                                            echo '<span class="float-center badge bg-warning">'.$row['con'].'</span>';
                                        }
                                    ?>

                                    </td>
                                    <td><?php echo $row['status_desc']; ?></td>
                                    <td style='width: 100px;'>
                                        <a href="index.php?page=item-edit&& id=<?php echo $id; ?>"
                                            class=" btn btn-sm btn-info">
                                            <i class="fas fa-solid fa-pen"></i>
                                        </a>

                                        <a onclick="delete_item('<?php echo $id; ?>')" class=" btn btn-sm btn-danger">
                                            <i class="fas fa-solid fa-trash"></i></a>
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
function delete_item(data_id) {
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
            window.location = ("action/admin/delete-item.php?id=" + data_id);
        }

    })


}
</script>