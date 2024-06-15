<?php  
include '../security.php';
include '../repository.php';
include '../conn.php';


$return = "../../student";
$email = $_REQUEST['email'];
$usersRepo->update($_REQUEST,['name','mobile']);
$profileRepo->update($_REQUEST,['dob','address','college','passingYear','cgpa','gtype','gboard']);

header("Location: $return.php?msg = application added&email=$email");

exit();


?>