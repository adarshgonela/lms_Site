<?php
function getUsers($filter=''){
    global $conn;
    if($filter){
        $sql = "SELECT * FROM users where $filter";
    }
    else{
        $sql = "SELECT * FROM users";
    }
    $result = mysqli_query($conn, $sql);

    $users = [];

    while($row = mysqli_fetch_assoc($result)){
        $users[] = $row;
    }

    return $users;
}
?>