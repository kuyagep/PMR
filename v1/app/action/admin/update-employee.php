<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $firstname=$_POST['firstname'];
        $middlename=$_POST['middlename'];
        $lastname=$_POST['lastname'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $position=$_POST['position'];
        $office=$_POST['office'];
        $division=$_POST['division'];
        $role=$_POST['role'];
        //picture//
        $file_name = $_FILES['picture']['name'];
        
        $file_temp = $_FILES['picture']['tmp_name'];
        move_uploaded_file($file_temp, '../../dist/img/users/'.$file_name);
        $query=mysqli_query($con,"UPDATE `employee` SET `firstname`='".$firstname."',`middlename`='".$middlename."',`lastname`='".$lastname."',
                         `emp_contact_no`='".$contact."',`emp_email_add`='".$email."',`position_id`='".$position."',`office_id`='".$office."',`division_id`='".$division."',`role_id`='".$role."', `picture`='".$file_name."' WHERE  `employee_id`='".$id."'");
         header("Location: ../../index.php?page=employee-edit&& id=".$id);

    }
?>