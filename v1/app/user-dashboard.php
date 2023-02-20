<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- End Content Header -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Statistics</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <?php 
                     $result = mysqli_query($con,"SELECT * FROM pmr_table where employee_id= '".$_SESSION["role_id"]."';");
                     $rowCount = mysqli_num_rows($result);
                     $delivered=0;
                     $count=1;
                     if($rowCount > 0){
                        
                         while($row = mysqli_fetch_assoc($result)){
                            if($row['pstatus_id'] == 1){
                                $delivered++;
                            }
                            $count++;
                         }
                    }
                    if($delivered != 0 || $count !=0){
                        $cal =  ($delivered/$count)*100;
                    }
                    
                    echo  "<p><b>Delivered </b>         ".number_format($cal,2).'% <span class="float-right"><b>'.$delivered.'</b></span></p>';
                ?>

                        <div class="progress progress-sm active">
                            <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                style="width: <?php  echo $cal; ?>%" title="<?php  echo number_format($cal,2); ?>%">
                            </div>
                        </div>

                        <!-- Not Delivered -->
                        <?php
                       
                     $result = mysqli_query($con,"SELECT * FROM pmr_table where employee_id= '".$_SESSION["role_id"]."';");
                     $rowCount = mysqli_num_rows($result);
                     if($rowCount > 0){
                        $count=0;
                        $delivered=0;
                         while($row = mysqli_fetch_assoc($result)){
                            if($row['pstatus_id'] == 2){
                                $delivered++;
                            }
                            $count++;
                         }
                    }
                    $cal =  ($delivered/$count)*100;
                    echo  "<p><b>Not Delivered </b>         ".number_format($cal,2).'% <span class="float-right"><b>'.$delivered.'</b></span></p>';
                ?>

                        <div class="progress progress-sm active">
                            <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100" style="width: <?php  echo $cal; ?>%"
                                title="<?php  echo number_format($cal,2); ?>%">
                            </div>
                        </div>
                        <!-- Pending -->
                        <?php 
                     $result = mysqli_query($con,"SELECT * FROM pmr_table where employee_id= '".$_SESSION["role_id"]."';");
                     $rowCount = mysqli_num_rows($result);
                     if($rowCount > 0){
                        $count=0;
                        $delivered=0;
                         while($row = mysqli_fetch_assoc($result)){
                            if($row['pstatus_id'] == 3){
                                $delivered++;
                            }
                            $count++;
                         }
                    }
                    $cal =  ($delivered/$count)*100;
                    echo  "<p><b>Pending </b>         ".number_format($cal,2).'% <span class="float-right"><b>'.$delivered.'</b></span></p>';
                ?>


                        <div class="progress progress-sm active">
                            <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                style="width: <?php  echo $cal; ?>%" title="<?php  echo number_format($cal,2); ?>%">
                            </div>
                        </div>
                        <!-- Failed -->
                        <?php 
                     $result = mysqli_query($con,"SELECT * FROM pmr_table where employee_id= '".$_SESSION["role_id"]."';");
                     $rowCount = mysqli_num_rows($result);
                     if($rowCount > 0){
                        $count=0;
                        $delivered=0;
                         while($row = mysqli_fetch_assoc($result)){
                            if($row['pstatus_id'] == 6){
                                $delivered++;
                            }
                            $count++;
                         }
                    }
                    $cal =  ($delivered/$count)*100;
                    echo  "<p><b>Failed </b>         ".number_format($cal,2).'% <span class="float-right"><b>'.$delivered.'</b></span> </p>';
                ?>

                        <div class="progress progress-sm active">
                            <div class="progress-bar bg-danger progress-bar-striped" role="progressbar"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                style="width: <?php  echo $cal; ?>%" title="<?php  echo number_format($cal,2); ?>%">
                            </div>
                        </div>
                        <!-- Proccesing -->
                        <?php 
                     $result = mysqli_query($con,"SELECT * FROM pmr_table where employee_id= '".$_SESSION["role_id"]."';");
                     $rowCount = mysqli_num_rows($result);
                     if($rowCount > 0){
                        $count=0;
                        $delivered=0;
                         while($row = mysqli_fetch_assoc($result)){
                            if($row['pstatus_id'] == 4){
                                $delivered++;
                            }
                            $count++;
                         }
                    }
                    $cal =  ($delivered/$count)*100;
                    echo  "<p><b>Proccesing </b>         ".number_format($cal,2).'% <span class="float-right"><b>'.$delivered.'</b></span> </p>';
                ?>

                        <div class="progress progress-sm active">
                            <div class="progress-bar bg-default progress-bar-striped" role="progressbar"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                style="width: <?php  echo $cal; ?>%" title="<?php  echo number_format($cal,2); ?>%">
                            </div>
                        </div>
                        <!-- Forwarded -->
                        <?php 
                     $result = mysqli_query($con,"SELECT * FROM pmr_table where employee_id= '".$_SESSION["role_id"]."';");
                     $rowCount = mysqli_num_rows($result);
                     if($rowCount > 0){
                        $count=0;
                        $delivered=0;
                         while($row = mysqli_fetch_assoc($result)){
                            if($row['pstatus_id'] == 5){
                                $delivered++;
                            }
                            $count++;
                         }
                    }
                    $cal =  ($delivered/$count)*100;
                    echo  "<p><b>Forwarded </b>         ".number_format($cal,2).'% <span class="float-right"><b>'.$delivered.'</b></span> </p>';
                ?>

                        <div class="progress progress-sm active">
                            <div class="progress-bar bg-secondary progress-bar-striped" role="progressbar"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                style="width: <?php  echo $cal; ?>%" title="<?php  echo number_format($cal,2); ?>%">
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <!-- Application buttons -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- small box -->
                                <div class="small-box bg-white callout callout-danger">
                                    <div class="inner">
                                        <h3>

                                            <?php
                                            $sql = "SELECT * from pmr_table where employee_id= '".$_SESSION["role_id"]."';";
                                            if ($result = mysqli_query($con, $sql)) {
                                                // Return the number of rows in result set
                                                $rowcount = mysqli_num_rows( $result );
                                                echo $rowcount;
                                            }
                                    ?>
                                        </h3>

                                        <p>Purchase Orders</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-md-6">
                                <!-- small box -->
                                <div class="small-box bg-white callout callout-warning">
                                    <div class="inner">
                                        <h3>
                                            <?php 
                     $result = mysqli_query($con,"SELECT * FROM pmr_table where employee_id= '".$_SESSION["role_id"]."';");
                     $rowCount = mysqli_num_rows($result);
                     if($rowCount > 0){
                        $count=0;
                        $delivered=0;
                         while($row = mysqli_fetch_assoc($result)){
                            if($row['pstatus_id'] == 1){
                                $delivered++;
                            }
                            $count++;
                         }
                    }
                    $cal =  ($delivered/$count)*100;
                    echo  number_format($cal,2).'% ';
                ?>
                                            <sup style="font-size: 20px"></sup>
                                        </h3>

                                        <p>Delivered</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <!-- small box -->
                                <div class="small-box bg-white callout callout-success">
                                    <div class="inner">
                                        <h3>
                                            <?php 
                     $result = mysqli_query($con,"SELECT * FROM pmr_table where employee_id= '".$_SESSION["role_id"]."';");
                     $rowCount = mysqli_num_rows($result);
                     if($rowCount > 0){
                        $count=0;
                        $delivered=0;
                         while($row = mysqli_fetch_assoc($result)){
                            if($row['pstatus_id'] == 2){
                                $delivered++;
                            }
                            $count++;
                         }
                    }
                    $cal =  ($delivered/$count)*100;
                    echo  number_format($cal,2).'% ';
                ?>
                                        </h3>
                                        <p>Pending</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-md-6">
                                <!-- small box -->
                                <div class="small-box bg-white callout callout-info">
                                    <div class="inner">
                                        <h3>
                                            <?php
                                            $sql = "SELECT * from pmr_table where employee_id= '".$_SESSION["role_id"]."'";
                                            $amount = 0;
                                            if ($result = mysqli_query($con, $sql)) {
                                                // Return the number of rows in result set
                                               while($row = mysqli_fetch_assoc($result)){
                                                    $amount = $amount + $row['amount'];
                                                }
                                                echo number_format($amount,2);
                                            }
                                    ?>
                                        </h3>

                                        <p>Total Amount</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
            <!-- /.col (left) -->

            <!-- /.col (right) -->
        </div>

        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>