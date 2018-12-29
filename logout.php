<?php
session_start();
include('check.php');
$username=$_SESSION['username'];
session_destroy();
header('location:index.php');
?>



