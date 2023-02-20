<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <!-- <img src="https://d2v9ipibika81v.cloudfront.net/uploads/sites/210/Profile-Icon.png"
                class="img-circle elevation-1" alt="User Image"> -->
            <span class="aui-avatar aui-avatar-xxlarge">
                <span class="aui-avatar-inner">
                    <?php 
                                if($_SESSION['session_picture']==""){
                                    $img = "default2-1-1.jpg";
                                }else{
                                    $img = $_SESSION['session_picture'];
                                }
                            ?>
                    <img class="img-circle elevation-0" src="dist/img/users/<?php echo $img; ?>"
                        alt="Profile Picture" />
                </span>
            </span>
        </div>
        <div class="info"> <strong>
                <a href="#" class="d-block"><?php 
                    echo $_SESSION['firstname']." ".$_SESSION['lastname'];
             ?> </a> </strong>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <?php 
        if($_SESSION['role_id'] == '1'){
            include('menu/superadmin.php');
        }elseif($_SESSION['role_id'] == '2'){
            include('menu/admin.php');
        }elseif($_SESSION['role_id'] == '3'){
            include('menu/user.php');
        } 
    ?>
    <!-- /.sidebar-menu -->
</div>