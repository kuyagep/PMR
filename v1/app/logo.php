<a href="dashboard" class="brand-link" title="PMR">

    <img src="<?php if($_SESSION['role_id']==2 || $_SESSION['role_id']==1){
        echo "dist/img/division.png";
    }else{
        echo "dist/img/division.png";
    } ?>" alt="PMR Logo" class="brand-image img-circle elevation-0" style="opacity: .9">
    <span class="brand-text font-weight-light">PMR | </span>
    <?php 
        if($_SESSION['role_id'] == '1'){
            echo "Super Panel";
        }elseif($_SESSION['role_id'] == '2'){
            echo "Admin Panel";
        }elseif($_SESSION['role_id'] == '3'){
           echo "User Panel";
        } 
    ?>
</a>