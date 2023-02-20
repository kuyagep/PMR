<?php
    include('../../../conf/config.php');

    $item= $_POST['item'];
    $employee=$_POST['employee'];
    $date= date("Y-m-d");

     $sql = "SELECT * from issuance";
    if ($result = mysqli_query($con, $sql)) {

        // Return the number of rows in result set
        $rowcount = mysqli_num_rows( $result );
        $rowcount = $rowcount + 1;
        // Display result
        $code = "ISNC".date('ym-').$rowcount;
    }
    
    $query = mysqli_query($con,"INSERT INTO `issuance`(`issued_date`,`issuance_code`, `issued_to`, `issued_item`) 
    VALUES ('".$date."','".$code."','".$employee."','".$item."')");
   
    header("location: ../../print-issuance.php?code=$code");
    //header("location: ../../index.php?page=issued-items");
?>