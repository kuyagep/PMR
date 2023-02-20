<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header('Location: ../index.php?session=expired');
    }
    include('header.php'); ?>
<?php include('../conf/config.php');?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <?php include('preloader.php'); ?>

        <!-- Navbar -->
        <?php include('navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar <?php 
                if($_SESSION['role_id'] == '1'){
                    echo "sidebar-dark-red";
                }elseif($_SESSION['role_id'] == '2'){
                    echo "sidebar-dark-red";
                }elseif($_SESSION['role_id'] == '3'){
                    echo "sidebar-light-red";
                } 
            ?> elevation-2">

            <!-- Brand Logo -->
            <?php include('logo.php'); ?>

            <!-- Sidebar -->
            <?php include('sidebar.php'); ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php //include('content_header.php'); ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <?php 
                if(isset($_GET['page'])){
                    $page =''.$_GET['page'].'.php';
                }else{
                        if($_SESSION['role_id'] == '1'){
                            $page = 'dashboard.php';
                        }elseif($_SESSION['role_id'] == '2'){
                            $page = 'dashboard.php';
                        }elseif($_SESSION['role_id'] == '3'){
                            $page = 'user-dashboard.php';
                        } 
                }

                if (file_exists($page)) {
                    require_once $page; 
                   
                }else{
                    require_once 'error-404.php';
                }
            //include('dashboard.php'); 
                
            ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <?php include('footer.php'); ?>
    <!-- ./wrapper -->
</body>


</html>