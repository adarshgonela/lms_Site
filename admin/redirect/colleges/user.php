<?php

function colleges($filter=''){
    global $conn;
    if($filter){
        $sql = "SELECT * FROM college where $filter";
    }
    else{
        $sql = "SELECT * FROM college";
    }
    $result = mysqli_query($conn, $sql);

    $books = [];

    while($row = mysqli_fetch_assoc($result)){
        $books[] = $row;
    }

    return $books;
}
function getCollege($id){
    global $conn;

    $sql = "SELECT * FROM college where id = '$id'";
    
    $result = mysqli_query($conn, $sql);

    $books = [];

    return mysqli_fetch_assoc($result);
}
?>