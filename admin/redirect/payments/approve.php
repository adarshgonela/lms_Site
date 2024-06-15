<?php

include "../conn.php";

$returnUrl = "../edit";

$id = $_REQUEST['id']; // Assuming id is being passed through $_REQUEST


// Basic validation example: Checking if required fields are not empty
if (empty($id)) {
    $status =  "Please fill in all required fields!";
    header("Location: $returnUrl.php?status=$status");
    exit;
}

$update_query = "UPDATE payments SET status = 'approved' WHERE id='$id'";
$status = mysqli_query($conn, $update_query) ? 'success' : 'error';

header("Location: $returnUrl.php?status=$status");

?>