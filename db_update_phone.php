<?php

    session_start();
    require('dbconnect.php');
    $_SESSION['username'];
    $username = $_SESSION['username'];
    $phone = $_POST['phone'];

    $sql = "UPDATE member SET phone = '$phone' WHERE username = '$username'";
    $sql = mysqli_query($con,$sql);
    $message = "Successfully";
    echo "<script type='text/javascript'>alert('$message');location='home.php';</script>";
?>