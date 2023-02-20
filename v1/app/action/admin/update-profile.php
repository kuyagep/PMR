<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $firstname=$_POST['firstname'];
        $middlename=$_POST['middlename'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $password=$_POST['change_password'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $position=$_POST['position'];
        $office=$_POST['office'];
        $role=$_POST['role'];
        //picture//
        $file_name = $_FILES['picture']['name'];
        
        $file_temp = $_FILES['picture']['tmp_name'];
        move_uploaded_file($file_temp, '../../dist/img/users/'.$file_name);
        $query=mysqli_query($con,"UPDATE `employee` SET `firstname`='".$firstname."',`middlename`='".$middlename."',`lastname`='".$lastname."', `username`='".$username."', `password`='".$password."',
                         `emp_contact_no`='".$contact."',`emp_email_add`='".$email."',`position_id`='".$position."',`office_id`='".$office."',`role_id`='".$role."', `picture`='".$file_name."' WHERE  `employee_id`='".$id."'");
         header("Location: ../../index.php?page=profile");

    }
?>