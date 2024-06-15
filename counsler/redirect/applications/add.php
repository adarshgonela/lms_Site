<?php  
include '../security.php';
include '../repository.php';
include '../conn.php';

$return = "../../applications";

$email = $_REQUEST['email'];
$collegeId = $_REQUEST['collegeId'];
$appliction = $applicationsRepo->fetch([],"`email`='$email' AND `collegeId`='$collegeId'");
if($appliction){
    header("Location: ../../newapplication.php?msg=application already exist&email=$email");
    exit();
}

$_REQUEST['date'] = $date;
$_REQUEST['counsler'] = $_SESSION['email'];
$college = $collegesRepo->fetch($collegeId);
$_REQUEST['fees'] = $college['fee'];
$_REQUEST['college'] = $college['name'];


$applicationsRepo->save($_REQUEST,['email','counsler','college','collegeId','fees','date']);
// $paymentsRepo->save($_REQUEST,['email','counsler','college','collegeId','fees','date']);


header("Location: $return.php?msg = application added");

exit();


?>