<?php

    session_start();
    require('dbconnect.php');
    $_SESSION['username'];
    $username = $_SESSION['username'];
    $address = $_POST['address'];

    $sql = "UPDATE member SET address = '$address' WHERE username = '$username'";
    $sql = mysqli_query($con,$sql);
    $message = "Successfully";
    echo "<script type='text/javascript'>alert('$message');location='home.php';</script>";
?>