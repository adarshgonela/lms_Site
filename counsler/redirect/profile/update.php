<?php  
include '../security.php';
include '../repository.php';
include '../conn.php';


$return = "../../profile";
$_REQUEST['email'] = $_SESSION['email'];
$usersRepo->update($_REQUEST,['name','mobile']);
$profileRepo->update($_REQUEST,['dob','address','college','passingYear','cgpa','gtype','gboard']);


$documentName = $_FILES["image"]["name"];
$documentTmpName = $_FILES["image"]["tmp_name"];
if($documentTmpName){
    $document = file_get_contents($documentTmpName);
}
else{
    $document = NULL; 
}


if($document){

$stmt = $conn->prepare("update `profile` set `image`= ? WHERE `email` = ?");
$stmt->bind_param("ss",$document,$_REQUEST['email']);
$stmt->execute();

}

header("Location: $return.php?msg=Profile updated successfully!");

exit();




?>