<?php
    include('../../../conf/config.php');
    
    $firstname = ucwords(trim($_POST['firstname']));
    $middlename = ucwords(trim($_POST['middlename']));
    $lastname = ucwords(trim($_POST['lastname']));
    $contact = $_POST['contact_no'];
    $email = trim($_POST['email']);
    $position = $_POST['position'];
    $office = $_POST['office'];
    $division = $_POST['division'];
    $role = $_POST['role'];
    $username = $email;
    $password = password_hash($username, PASSWORD_DEFAULT);
    $date = date('Y-m-d H:i:s');

    $query=mysqli_query($con,"INSERT INTO `employee`(`firstname`, `middlename`, `lastname`, `emp_contact_no`, `emp_email_add`, `position_id`, `office_id`,`division_id`, `username`, `password`, `role_id`, `added_at`) 
                                            VALUES ('".$firstname."','".$middlename."','".$lastname."','".$contact."','".$email."','".$position."','".$office."','".$division."','".$username."','".$password."','".$role."','".$date."')" );
    
    header("location: ../../employee");
?>