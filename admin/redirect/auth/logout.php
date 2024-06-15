<?php
session_start();

$_SESSION['name'] = null;
$_SESSION['email'] = null;
$_SESSION['role'] = null;

session_destroy();
header("Location: ../../login.php?error=session expired");
exit();