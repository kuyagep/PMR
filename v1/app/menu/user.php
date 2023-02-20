<?php
    if(isset($_GET['login'])){
     
      $x = $_GET['login'];
      if($x==1){
        echo "<script>
        toastr.success('Successfully Login.')
        </script>";
      }
    }
?>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="index.php?page=user-dashboard" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="index.php?page=user-pmr" class="nav-link">
            <i class="fas fa-tag nav-icon"></i>
                <p>
                    Purchase Order
                    <span class="right badge badge-success">New</span>
                </p>
            </a>
        </li>
        <!-- <li class="nav-item ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Purchase Orders
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=owned-items" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>item-owned</p>
                    </a>
                </li>


            </ul> -->

        <!-- <li class="nav-header">Account</li>
        <li class="nav-item">
            <a href="index.php?page=profile" class="nav-link  ">
                <i class="nav-icon fas fa-user-circle"></i>
                <p>
                    My Profile
                </p>
            </a>
        </li> -->
        </li>
    </ul>
</nav>