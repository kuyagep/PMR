<?php
    include('../conf/config.php');
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print Report </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body>
    <div class="container m-10">
        <!-- Main content -->
        <section class="container">
            <!-- title row -->
            <div class="row">
                <div class="col-4 text-center"> <br>
                    <img src="dist/img/kagawaran.png" alt="Visa" width="100px">
                </div>
                <div class="col-4"> <br>
                    <h4 class="text-center">Department of Education</h4>
                    <h3 class="text-center"><b>Division of Davao del Sur</b></h3> <br> <br>
                    <h1 class="text-center"><b>Items Report</b></h1> <br>
                </div>
                <!-- /.col -->
                <div class="col-4 text-center"> <br>
                    <img src="dist/img/division.png" alt="Visa" width="100px">
                </div>
            </div>

            <div class="row">
                <div class="col-12 table-responsive">
                    <table id="" class="table table-hover table-striped " width="100%" cellspacing="0"">
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
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <p>This is computer generated report no signature required.</p>
                </div>
            </div>
        </section>
    </div>
    <script>
    window.addEventListener("load", window.print());
    </script>