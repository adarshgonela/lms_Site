<?php 

    session_start();
    $return = "login";
    if(!isset($_SESSION['email']) || !isset($_SESSION['role'])) {
        // If user is not logged in, redirect to login page
        header("Location: $return.php?error=Please login to View Page");
        exit();
    }
    include "../db.php";
    include_once('redirect/repository.php');
    $current_file = explode(".",basename($_SERVER['PHP_SELF']))[0];

    $usersRepo = new Repository('users','email',$conn);
    $coursesRepo = new Repository('courses','id',$conn);
    $collegesRepo = new Repository('colleges','id',$conn);
    $documentsRepo = new Repository('documents','id',$conn);
    $mycoursesRepo = new Repository('courses','id',$conn);
    $paymentsRepo = new Repository('payments','id',$conn);
    $profileRepo = new Repository('profile','email',$conn);

   

    $email = $_SESSION['email'];
   // $userid = $_SESSION['id'];
    $user = $usersRepo->fetch($email);
    $profile = $profileRepo->fetch($email);

?>