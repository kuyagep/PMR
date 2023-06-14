<?php
session_start();

// Check if the user is already logged in, if yes then redirect to dashboard page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
} 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMR | Dashboard</title>
    <!-- Google ReCaptcha -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        crossorigin="anonymous"> -->
    <!-- SweetAlert2 -->
    <!-- <link rel="stylesheet" href="app/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css"> -->
    <style>
    /* * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    } */

    #login-background {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1)), url('app/dist/img/background-login.jpg');
        background-position: center;
        background-size: cover;
    }

    /* .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    } */
    </style>
</head>
<?php
       if(isset($_GET['error'])){
        $x = $_GET['error'];
        if($x==1){
            echo "<script>alert('Invalid Username')</script>";
        }elseif($x==5){
        echo    "<script>
                    alert('Invalid Recaptcha!');
                </script>";
        }
    }
?>

<body class="hold-transition login-page " id="login-background">
    <div class="body-absolute">
        <?php include('app/message.php'); ?>
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="login-logo mb-2">
                <img src="app/dist/img/division.png" alt="" style="width: 100px; height: 100px;"">
            </div>
            <div class=" text-center mb-3">
                <a href="index" class="h1 text-white" style="text-decoration: none;"><b>Procurement Monitoring Report
                    </b></a>
            </div>
            <div class=" card">

                <div class="card-body login-card-body">
                    <!-- <p class="login-box-msg">Sign in to start your session</p> -->


                    <p class="text-center text-dark">Login to start your session</p>
                    <!-- Alert when login error -->
                    <?php 
                            if(isset($_GET['error'])){
                                echo '<div class="alert alert-light text-center text-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>'
                                .$_GET['error'].        
                                '</strong>
                            </div>';
                            }
                        ?>

                    <form action="conf/verify.php" method="post">
                        <div class="input-group mb-3 ">
                            <input type="text" class="form-control" placeholder="Enter username" name="username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3 input-group">
                            <input type="password" class="form-control" placeholder="Enter password" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="input-group mb-3">
                            <button type="submit" name="login" class="btn  btn-block bg-gradient-danger">
                                Log In</button>
                        </div> -->
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-danger">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-block bg-gradient-danger">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="lockscreen-footer text-center text-white">
                Copyright &copy; 2023 <b><a href="index" class="text-black">PMR </a></b> | All rights reserved<br>
                Developed by Geperson Mamalias
            </div>
        </div>
    </div>

    <!-- /.login-box -->


    <!-- jQuery -->
    <script src="app/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="app/dist/js/adminlte.min.js"></script>
    <!-- SweetAlert2 -->
    <!-- <script src="app/plugins/sweetalert2/sweetalert2.min.js"></script> -->
    <!-- <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561436720/particles.js"></script> -->
    <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561436735/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.0/dist/sweetalert2.all.min.js"></script>

    <!-- Sweet Alert -->
    <script src="app/dist/js/sweetalert2.all.min.js"></script>

    <!-- <script>
    $(document).ready(function() {

        var count_particles, stats, update;
        stats = new Stats;
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
        count_particles = document.querySelector('.js-count-particles');
        update = function() {
            stats.begin();
            stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);


    });
    </script> -->


</body>

</html>