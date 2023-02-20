<?php
    unset($_SESSION);
    
    // Unset all of the session variables
    $_SESSION = array();
    
    // Destroy the session.
    session_destroy();
    
    // Redirect to login page
    header('Location: ../index.php?session=expired');

exit;
?>