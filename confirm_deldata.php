<?php

require('dbconnect.php');

session_start();

$_SESSION['username'];

$username = $_SESSION['username'];
$sql = "DELETE FROM member WHERE username = '$username'";

$sql = mysqli_query($con,$sql);
$message = "Delete Successfully";
echo "<script type='text/javascript'>alert('$message');location='index.php';</script>";

session_destroy();
?>