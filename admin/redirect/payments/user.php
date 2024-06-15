<?php
function getPayments($filter=''){
    global $conn,$_SESSION;
    $email = $_SESSION['email'];
    if($filter){
        $sql = "SELECT * FROM payments where email='$email' and $filter";
    }
    else{
        $sql = "SELECT * FROM payments where email='$email'";
    }
    $result = mysqli_query($conn, $sql);

    $payments = [];

    while($row = mysqli_fetch_assoc($result)){
        $payments[] = $row;
    }

    return $payments;
}
?>