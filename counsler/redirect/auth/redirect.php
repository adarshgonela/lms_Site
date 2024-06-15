<?php 
   session_start();
   include "../conn.php";
   if (isset($_SESSION['email']) && isset($_SESSION['role'])) {   
         //admin
      	if ($_SESSION['role'] == 'admin'){
			header("Location: ../../admin/index.php");
      	 }
		 //employee
		 else if ($_SESSION['role'] == 'employee'){ 
			header("Location: ../../employee/index.php");
      	} 
		//student
		  else if ($_SESSION['role'] == 'student'){ 
			header("Location: ../../user/index.php");	
		}
    }
    else{
        header("Location:../../auth/index.php?Please Login to Proceed");
    }
?>