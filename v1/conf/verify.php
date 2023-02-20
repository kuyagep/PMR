<?php 

session_start(); 
include "config.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);
    if(empty($uname) && empty($pass)){
        header("location: ../index.php?error=Username and Password is required");
	    exit();
    }
	if (empty($uname)) {
        header("location: ../index.php?error=Username is required");
	    exit();
	}else if(empty($pass)){
        header("location: ../index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM employee WHERE username='$uname'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if($row['username'] === $uname){
                if (password_verify($pass, $row['password']) ) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION["loggedin"] = true;
				$_SESSION["id"] = $row['employee_id'];
				$_SESSION["session_picture"] = $row['profile_pic'];
                $_SESSION["firstname"] = $row['firstname']; 
                $_SESSION["lastname"] = $row['lastname']; 
                $_SESSION["role_id"] = $row['role_id']; 
                $_SESSION["email"] = $row['email_add']; 

                                    
                 header("location: ../app/");
		        exit();
            }else{
				header("Location: ../index.php?error=Incorect password");
		        exit();
			}
            }else{
                header("Location: ../index.php?error=Incorrect username");
		        exit();
            }
            
		}else{
			header("Location: ../index.php?error=Username not Exist.");
	        exit();
		}
	}
	
}else{
	header("Location: ../index.php?error=Username/Password is Required");
	exit();
}