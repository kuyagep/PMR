<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Issued Items</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Issued Items</li>
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
                                Issued Items</STRONG></h3>

                        <button type="button" class="btn btn-info float-right" data-toggle="modal"
                            data-target="#issuance">
                            <i class="fas fa-solid fa-tag mr-2"></i>
                            Issue Item
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="dataTable" class="table table-hover table-striped " width="100%" cellspacing="0"">
                            <thead class=" thead-dark">
                            <tr>
                                <th>Issuance Code</th>
                                <th>Item Name</th>
                                <th>Accountable</th>
                                <th>Office</th>
                                <th>Category</th>
                                <th>Condition</th>
                                <th>Date Issued</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                //SELECT * FROM issuance INNER JOIN items ON issuance.issued_item=items.item_id LEFT JOIN employee ON issuance.issued_to=employee.employee_id;
                                $result = mysqli_query($con,"SELECT issuance.issued_id, issuance.issuance_code, issuance.issued_date, items.item_name, employee.firstname, employee.lastname, office.office_name, category.category_name, con.con_desc FROM issuance INNER JOIN items ON issuance.issued_item=items.item_id LEFT JOIN employee ON issuance.issued_to=employee.employee_id INNER JOIN office ON employee.office_id=office.office_id INNER JOIN con ON items.con_id=con.con_id INNER JOIN category ON items.category_id=category.category_id ORDER BY `issuance`.`issued_id` DESC;");
                                $count=1;
                                $rowCount = mysqli_num_rows($result);
                                if($rowCount > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                         $id=$row['issued_id'];
                                         ?>
                                <tr>
                                    <td><?php echo $row['issuance_code']; ?></td>
                                    <td><?php echo $row['item_name']; ?></td>
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                    <td><?php echo $row['office_name']; ?></td>
                                    <td><?php echo $row['category_name']; ?></td>


                                    <td><?php 
                                        if($row['con_desc'] == "Working"){
                                            echo '<span class="float-center badge bg-success">'.$row['con_desc'].'</span>';
                                        }else{
                                            echo '<span class="float-center badge bg-warning">'.$row['con_desc'].'</span>';
                                        }
                                    ?>

                                    </td>
                                    <td><?php echo $row['issued_date']; ?></td>
                                    <td style='width: 100px;'>
                                        <a href="index.php?page=issued-edit&& id=<?php echo $id; ?>"
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
            window.location = ("action/admin/delete-issuance.php?id=" + data_id);
        }

    })


}
</script>