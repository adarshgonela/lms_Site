<?php  
include '../security.php';
include '../repository.php';
include '../conn.php';

$return = "../../applications";

$sid = $_REQUEST['sid'];
$uid = $_REQUEST['uid'];
$appliction = $applicationsRepo->fetch([],"`sid`='$sid' AND `uid`='$uid'");
if($appliction){
     header("Location: ../../newapplication.php?msg=application already exist&student=$sid");
    exit();
}

//student
$student = $usersRepo->fetch($sid);
$_REQUEST['sid'] = $sid;
$_REQUEST['sname'] = $student['name'];


//counsler
$cid = $_SESSION['email'];
$counsler = $usersRepo->fetch($cid);
$_REQUEST['cid'] = $cid;
$_REQUEST['cname'] = $counsler['name'];

//university
$college = $collegesRepo->fetch($uid);
$_REQUEST['uid'] = $uid;
$_REQUEST['uname'] = $college['name'];
$_REQUEST['fees'] = $college['fee'];
$_REQUEST['ccm'] = $college['ccm'];
$_REQUEST['acm'] = $college['acm'];

$_REQUEST['appliedon'] = $date;

print_r($_REQUEST);

$applicationsRepo->save($_REQUEST,['sid','sname','cid','cname','uid','uname','degree','semister','fees','ccm','acm','appliedon']);
// $paymentsRepo->save($_REQUEST,['email','counsler','college','collegeId','fees','date']);


header("Location: $return.php?msg = application added");

exit();


?>