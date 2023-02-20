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
                    <h1 class="text-center"><b>Employee Report</b></h1> <br>
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
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Role</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $result = mysqli_query($con,"SELECT employee.employee_id, employee.firstname, employee.middlename, employee.lastname, employee.emp_contact_no, employee.emp_email_add, position.position_name AS position, office.office_name AS office, role.role_desc AS role FROM `employee` LEFT JOIN position ON employee.position_id = position.position_id 
                                LEFT JOIN office ON employee.office_id = office.office_id LEFT JOIN role ON employee.role_id = role.role_id ORDER BY employee.employee_id DESC");
                                $count=1;
                                $rowCount = mysqli_num_rows($result);
                                if($rowCount > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                         $id=$row['employee_id'];
                                         ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['emp_contact_no']; ?></td>
                                <td><?php echo $row['emp_email_add']; ?></td>
                                <td><?php echo $row['position']; ?></td>
                                <td><?php echo $row['office']; ?></td>
                                <td><?php echo $row['role']; ?></td>


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