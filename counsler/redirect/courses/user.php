<?php
function getCourses($filter=''){
    global $conn,$_SESSION;
    $email = $_SESSION['email'];
    if($filter){
        $sql = "SELECT * FROM courses where email='$email' and $filter";
    }
    else{
        $sql = "SELECT * FROM courses ";
    }
    $result = mysqli_query($conn, $sql);

    $courses = [];

    while($row = mysqli_fetch_assoc($result)){
        $courses[] = $row;
    }

    return $courses;
}
?>