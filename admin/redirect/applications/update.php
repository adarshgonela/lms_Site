<?php  
include '../security.php';
include '../repository.php';
include '../conn.php';

$return = "../../application";

$id = $_REQUEST['id'];
$data = $applicationsRepo->fetch($id);
if(!$data){
    header("Location:$return.php?msg=no application exist");
    exit();
}

$applicationsRepo->update($_REQUEST);


header("Location: $return.php?id=$id&msg = application updated");

exit();


?>