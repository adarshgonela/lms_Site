<?php
function getDocuments($filter=''){
    global $conn,$_SESSION;
    $email = $_SESSION['email'];
    if($filter){
        $sql = "SELECT * FROM documents where email='$email' and $filter";
    }
    else{
        $sql = "SELECT * FROM documents ";
    }
    $result = mysqli_query($conn, $sql);

    $documents = [];

    while($row = mysqli_fetch_assoc($result)){
        $documents[] = $row;
    }

    return $documents;
}
?>