<?php  
date_default_timezone_set("Asia/Calcutta");

include "../../../db.php";
function input($key) {
	global $_REQUEST;
	if(isset($_REQUEST[$key]) && $_REQUEST[$key] && trim($_REQUEST[$key])!=""){
		return trim($_REQUEST[$key]);
	}
	return null;
	
}

$logoutLimit = 10;
$time = date('H:i');
$date = date('Y-m-d');
$datetime = date('Y-m-d');
$month = date('Y-m');

include_once('repository.php');

$usersRepo = new Repository('users','email',$conn);
$profileRepo = new Repository('profile','email',$conn);
$coursesRepo = new Repository('courses','id',$conn);
$collegesRepo = new Repository('colleges','id',$conn);
$documentsRepo = new Repository('users','id',$conn);
$applicationsRepo = new Repository('applications','id',$conn);



