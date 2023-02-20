<?php
    if(isset($_GET['action'])){
        $id=$_GET['action'];
        if($id == 1){   
                header("location: ../../print-issuances.php");
        }elseif($id == 2){
            header("location: ../../print-items.php");
        }elseif($id == 3){
                header("location: ../../print-employee.php");
        }elseif($id == ''){
            header("location: ../../index.php?page=reports&& error=1");
        }
    }
?>