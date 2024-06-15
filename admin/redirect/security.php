<?php 

   session_start();
   $return = "../../login";
   if(!isset($_SESSION['email']) || !isset($_SESSION['role'])) {
    // If user is not logged in, redirect to login page
    header("Location: $return.php?error=Please login to View Page");
    exit();
   }