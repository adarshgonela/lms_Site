<?php  
include '../security.php';
include '../repository.php';
include '../conn.php';

$return = "../../students";

$email = $_REQUEST['email'];
$user = $usersRepo->fetch($email);
if($user){
    header("Location: ../../newstudent.php?msg = student already exist");
}

$_REQUEST['name'] = $_REQUEST['fname']." ".$_REQUEST['lname'];
$_REQUEST['date'] = $date;
$counsler =  $_SESSION['email'];
$_REQUEST['counsler'] = $counsler;
$_REQUEST['cname'] = $usersRepo->fetch($counsler)['name'];
$_REQUEST['status'] = "verified";
$_REQUEST['password'] = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

$usersRepo->save($_REQUEST,['email','password','name','counsler','cname','mobile','status','date']);

$profileRepo->save($_REQUEST,['email','college','passingYear','dob','address', 'cgpa']);

header("Location: $return.php?msg = student added");

exit();


?>