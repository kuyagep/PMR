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
<?php //if($_SESSION['PAGE'] == "dashboard"){echo "active";}?>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-header">Home</li>
        <li class="nav-item">
            <a href="dashboard" class="nav-link active">
                <i class="fas fa-chart-pie nav-icon"></i>
                <p>
                    Dashboard
                    <!-- <span class="right badge badge-warning">New</span> -->
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="add-order" class="nav-link" data-toggle="modal" data-target="#add-purchase-order">
                <i class="fas fa-shopping-cart nav-icon"></i>
                <p>
                    Add Purchase Order
                    <span class="right badge badge-success">New</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pmr" class="nav-link ">
                <i class="fas fa-cubes nav-icon"></i>
                <p>
                    Purchase Orders
                </p>
            </a>
        </li>
        <li class="nav-header">Reports</li>
        <!-- <li class="nav-item">
            <a href="pmr-report" class="nav-link ">
                <i class="fas fa-cubes nav-icon"></i>
                <p>
                    PMR
                </p>
            </a>
        </li> -->
        <!-- <li class="nav-item">
            <a href="items" class="nav-link ">
                <i class="fas fa-cubes nav-icon"></i>
                <p>
                    Items
                </p>
            </a>
        </li> -->
        <li class="nav-item">
            <a href="employee" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>
                    Manage Employee
                    <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
            </a>
            <!-- <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="employee" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Employee List</p>
                    </a>
                </li>

            </ul> -->
        </li>
        <li class="nav-header">Components</li>
        <li class="nav-item">
            <a href="employee" class="nav-link">
                <i class="fas fa-link"></i>
                <p>
                    Components
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="position" class="nav-link ">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                            Position
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="office" class="nav-link ">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Office
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="purchase-category" class="nav-link ">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                            Purchase Category
                        </p>
                    </a>
                </li>

            </ul>
        </li>
        <!-- <li class="nav-item">
            <a href="position" class="nav-link ">
                <i class="nav-icon fas fa-layer-group"></i>
                <p>
                    Position
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="office" class="nav-link ">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>
                    Office
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="suppliers" class="nav-link ">
                <i class="nav-icon fas fa-solid fa-store"></i>
                <p>
                    Supplier
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="category" class="nav-link ">
                <i class="nav-icon fas fa-list"></i>
                <p>
                    Category
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="status" class="nav-link ">
                <i class="nav-icon fas fa-heart"></i>
                <p>
                    Status
                </p>
            </a>
        </li>
        <li class="nav-header">Reports</li>
        <li class="nav-item">
            <a href="reports" class="nav-link ">
                <i class="nav-icon fas fa-print"></i>
                <p>
                    Report
                </p>
            </a>
        </li> -->
        <li class="nav-header">Account</li>
        <li class="nav-item">
            <a href="profile" class="nav-link  ">
                <i class="nav-icon fas fa-user-circle"></i>
                <p>
                    My Profile
                </p>
            </a>
        </li>
    </ul>
</nav>