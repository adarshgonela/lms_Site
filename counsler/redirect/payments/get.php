<?php
function getPayments($filter=''){
    global $conn;
    if($filter){
        $sql = "SELECT * FROM payment where $filter";
    }
    else{
        $sql = "SELECT * FROM payment";
    }
    $result = mysqli_query($conn, $sql);

    $payments = [];

    while($row = mysqli_fetch_assoc($result)){
        $payments[] = $row;
    }

    return $payments;
}
?>