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
                    <h1 class="text-center"><b>Issuance Report</b></h1> <br>
                </div>
                <!-- /.col -->
                <div class="col-4 text-center"> <br>
                    <img src="dist/img/division.png" alt="Visa" width="100px">
                </div>
            </div>

            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-hover table-striped " width="100%" cellspacing="0"">
                            <thead class=" thead-dark">
                        <tr>
                            <th>Issuance Code</th>
                            <th>Item Name</th>
                            <th>Accountable</th>
                            <th>Office</th>
                            <th>Category</th>
                            <th>Condition</th>
                            <th>Date Issued</th>
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