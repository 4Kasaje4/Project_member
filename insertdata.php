<?php

    require('dbconnect.php');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $comfirm_password = md5($_POST['confirm_password']);

    $sql = "SELECT * FROM member WHERE username = '$username'";
    $sql = mysqli_query($con,$sql);

    $rows = mysqli_num_rows($sql);

    if($rows == 1){
        $message = "Username not available";
            echo "<script type='text/javascript'>alert('$message');location='register.php';</script>";
    }
    else {
        if($password  !=  $comfirm_password){
            $message = "Password is not match";
            echo "<script type='text/javascript'>alert('$message');location='register.php';</script>";
        }
    
        else { $sql = "INSERT INTO member(username , M_pass , fristname , lastname) VALUE ( '$username' , '$password' , '$firstname' , '$lastname' )";
    
        mysqli_query($con,$sql);
        $Success = "register successfully";
        echo "<script type='text/javascript'>alert('$Success');location='index.php';</script>";
        }
    
    }
    
?>