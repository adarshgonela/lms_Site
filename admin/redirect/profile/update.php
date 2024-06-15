<?php
session_start();
include "../conn.php";

$mobile=$_REQUEST['mobile'];
$name=$_REQUEST['name'];
  
$email=$_SESSION['email'];
$sql = "UPDATE users SET name ='$name', mobile='$mobile' WHERE email = '$email'";

$result = mysqli_query($conn, $sql);

header("Location: ../../user/profile.php?status=updated");


?>