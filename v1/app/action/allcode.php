<?php
    session_start();
if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['loggedin']);

    $_SESSION['message'] = "Logout Successfully";
    header('Location: ../../index.php?session=logout');
    exit(0); 
}
    

?>