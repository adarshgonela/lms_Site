<?php
    session_start();
    include_once('../conn.php');

    $returnUrl = "../../user/viewdocuments";
    if(!isset($_REQUEST['type'])){
        header("Location:$returnUrl.php?status=kyc updated");
        exit();
    }
    if(!isset($_REQUEST['name'])){
        header("Location:$returnUrl.php?status=kyc updated");
        exit();
    }
    if(!isset($_SESSION['email'])){
        header("Location:$returnUrl.php?status=kyc updated");
        exit();
    }

    $email = $_SESSION['email'];
    $type = $_REQUEST['type'];
    $name = $_REQUEST['name'];

    $documentName = $_FILES["document"]["name"];
    $documentTmpName = $_FILES["document"]["tmp_name"];
    if($documentTmpName){
        $document = file_get_contents($documentTmpName);
    }
    else{
        $document = NULL; 
    }
    
    
    if($document){
    
    $stmt = $conn->prepare("INSERT into `documents` (`email`,`type`,`name`,`document`) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss",$email,$type,$name,$document);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Image uploaded and inserted into the database.";
        header("Location:$returnUrl.php?status=kyc updated");
    } else {
        header("Location:$returnUrl.php?status=invalid images");
        exit();
    }

    $stmt->close();
     
    header("Location:$returnUrl.php?status=kyc updated");
    }
    else{
         header("Location:$returnUrl.php?status=invalid images");
         exit();
    }
?>