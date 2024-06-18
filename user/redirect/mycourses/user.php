<?php
function getapplications($filter=''){
    global $conn,$_SESSION;
    if($filter){
        $sql = "SELECT * FROM applications where $filter";
    }
    else{
        $sql = "SELECT * FROM applications";
    }
    $result = mysqli_query($conn, $sql);

    $applications = [];

    while($row = mysqli_fetch_assoc($result)){
        $applications[] = $row;
    }

    return $applications;
}
?>