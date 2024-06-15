<?php  
include '../security.php';
include '../repository.php';
include '../conn.php';


$return = "../../profile";
$_REQUEST['email'] = $_SESSION['email'];
$usersRepo->update($_REQUEST,['name','mobile']);
$profileRepo->update($_REQUEST,['dob','address','college','passingYear','cgpa','gtype','gboard']);

header("Location: $return.php?msg=profile updated");

exit();


?>