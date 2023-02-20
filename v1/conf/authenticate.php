<?php
    require_once "config.php";
    session_start();


// Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
//     if(isset($_SESSION["role_id"])){
//       if( $_SESSION["role_id"] == "1"){
//             header("location: index.php");
//         }else if($_SESSION["role_id"] == "2"){
//             header("location: ../app");
//         }
//     }
// }
 

 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = $pending ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $secret = "6Lcoum0iAAAAAPiw0sXyy9XIPiSVE5IxFQBfkAcw";
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $url = "https://google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
    $data = file_get_contents($url);
    $row = json_decode($data, true);

    if($row['success']==true){
        echo "<script>confirm('Success')</script>";
    // Check if username is empty
        if(empty(trim($_POST["username"]))){
            $_SESSION['loginError'] = "Please enter username.";
            header("location: ../index.php?error=1");
            
        } else{
            $username = trim($_POST["username"]);
        }
        
        // Check if password is empty
        if(empty(trim($_POST["password"]))){
            $_SESSION['loginError'] = "Please enter password.";
            header("location: ../index.php?error=2");
        } else{
            $password = trim($_POST["password"]);
        }
        
        // Validate credentials
        if(empty($username_err) && empty($password_err)){
            // Prepare a select statement
            $sql = "SELECT employee_id , picture, username, password, role_id, firstname, middlename, lastname, position_id, office_id, emp_contact_no, emp_email_add FROM employee WHERE username = ?";
            
            if($stmt = mysqli_prepare($con,$sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set parameters
                $param_username = $username;

                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Store result
                    mysqli_stmt_store_result($stmt);
                    
                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1){                    
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $employee_id,$picture, $username, $hashed_password, $role_id, $firstname, $middlename, $lastname, $position_id, $office_id, $emp_contact_no, $emp_email_add);
                        if(mysqli_stmt_fetch($stmt)){
                            if(password_verify($password, $hashed_password)){
                                
                                // $_SESSION["status"] = $status;
                            
                                
                                    // Password is correct, so start a new session
                                    //session_start();
                                    //Store data in session variables
                                    $_SESSION["loggedin"] = true;
                                    $_SESSION["id"] = $employee_id;
                                    $_SESSION["session_picture"] = $picture;
                                    $_SESSION["username"] = $username; 
                                    $_SESSION["firstname"] = $firstname; 
                                    $_SESSION["lastname"] = $lastname; 
                                    $_SESSION["role_id"] = $role_id; 
                                    $_SESSION["emp_email_add"] = $emp_email_add; 
                                    header("location: ../app/");
                                    // if( $_SESSION["role_id"] ==  "3"){
                                    //     header("location: ../app/");
                                    // }else if($_SESSION["role_id"] == "3"){
                                    //     header("location: ../index.php");
                                    // }
                            } else{
                                header("location: ../index.php?error=4");
                                // Password is not valid, display a generic error message
                                //$login_err = "Invalid username or not password.";
                                // $_SESSION['message']='Either email/password is incorrect';
                            }
                        }
                    } else{
                        $_SESSION['loginError'] = "Username not exist.";
                        header("location: ../index.php?error=3");
                        // Username doesn't exist, display a generic error message
                        //$login_err = "Invalid username or password.";
                    }
                } else{
                    $_SESSION['loginError'] = "Connection Error.";
                    header("location: ../index.php?error=1");
                    //echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
        }



        
    }else{
        header("location: ../index.php?error=5");
    }
    
    
    // Close connection
    mysqli_close($con);
}
?>