<?php

    require('dbconnect.php');

    session_start();

    $_SESSION['username'] = $_POST['Uname'];
    $_SESSION['password'] = md5($_POST['Pname']);

    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    $sql = "SELECT * FROM member WHERE username = '$username'";
    $sql = mysqli_query($con,$sql);
    $rows = mysqli_num_rows($sql);

    if($rows == 1){
        while($x = mysqli_fetch_assoc($sql)){
            if($x['M_pass'] == $password && $username == $x['username']){
                header('location:home.php');
            }
            else{
                $message = "No account Please try again";
                echo "<script type='text/javascript'>alert('$message');location='index.php';</script>";
            }
        }
    }
    else{
        $message = "No account Please try again";
        echo "<script type='text/javascript'>alert('$message');location='index.php';</script>";
    }
?>
