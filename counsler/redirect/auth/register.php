<?php 
session_start();
include '../conn.php';

// Initialize an array to hold errors
$errors = array();
echo "test";
// If user signup button is clicked
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $mobile1 = mysqli_real_escape_string($conn, $_POST['mobile']);
    $role1 = mysqli_real_escape_string($conn, $_POST['role']);
    echo "test1";

    // Check if passwords match
    if($password !== $cpassword){
        $errors[] = "Both passwords should match.";
    }

    // Check if email is already registered
    $email_check = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors[] = "Email already registered.";
    }

    // If no errors, proceed with registration
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO users (name, email, password, code, status,mobile,role)
                        VALUES ('$name', '$email', '$encpass', '$code', '$status','$mobile1','$role1')";
        $data_check = mysqli_query($conn, $insert_data);
        header("Location: ../../auth/index.php?error=Successfully registered, Please login");
    }
    // ----------------------------------------------------------------
    // If there are errors, redirect back with error messages
    if(count($errors) > 0){
        $error_message = implode(", ", $errors);
        header("Location: ../../auth/register.php?error=" . urlencode($error_message));
        exit();
    }
}
?>
