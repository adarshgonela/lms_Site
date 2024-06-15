<?php
function getDocuments($filter=''){
    global $conn;
    if($filter){
        $sql = "SELECT * FROM documents where $filter";
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