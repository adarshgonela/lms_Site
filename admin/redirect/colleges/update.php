<?php  
include '../security.php';
include '../repository.php';
include '../conn.php';

$return = "../../university";

$id = $_REQUEST['id'];
$college = $collegesRepo->fetch($id);
if(!$college){
    header("Location:$return.php?msg=no university exist");
    exit();
}

$collegesRepo->update($_REQUEST);


header("Location: $return.php?id=$id&msg = application added");

exit();


?>