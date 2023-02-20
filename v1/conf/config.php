<?php
    // setting time zone
    // if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    //     header('Location: ../index.php?session=expired');
    // }
    date_default_timezone_set("Asia/Manila");

    // define the site root
    define('SITE_ROOT', 'http://localhost/inventories');

    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'supply_db');
    
    /* Attempt to connect to MySQL database */
    $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
?>