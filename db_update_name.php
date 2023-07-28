<?php

    session_start();
    require('dbconnect.php');
    $_SESSION['username'];
    $username = $_SESSION['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sql = "UPDATE member SET fristname = '$fname' , lastname = '$lname' WHERE username = '$username'";
    $sql = mysqli_query($con,$sql);
    $message = "Successfully";
    echo "<script type='text/javascript'>alert('$message');location='home.php';</script>";
?>