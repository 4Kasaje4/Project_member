<?php

    session_start();
    require('dbconnect.php');
    $_SESSION['username'];
    $username = $_SESSION['username'];
    $info = $_POST['info'];

    $sql = "UPDATE member SET info = '$info' WHERE username = '$username'";
    $sql = mysqli_query($con,$sql);
    $message = "Successfully";
    echo "<script type='text/javascript'>alert('$message');location='home.php';</script>";
?>