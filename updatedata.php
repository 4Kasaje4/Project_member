<?php

    session_start();
    require('dbconnect.php');
    $firstname = $_SESSION['firstname'];
    $password = md5($_POST['newpassword']);
    $confirmpassword = md5($_POST['confirmpassword']);
    $mysql = "SELECT * FROM member WHERE fristname='$firstname'";
    $mysql = mysqli_query($con,$mysql);

    while($x = mysqli_fetch_assoc($mysql)){
        $id = $x['id'];
        if($password == $confirmpassword){
            $sql = "UPDATE member SET M_pass = '$password' WHERE id = '$id' ";
            mysqli_query($con,$sql);
            echo "<script type='text/javascript'>alert('Reset password Successfully!!!');location='index.php';</script>";
            }
        else{
            $message = "Password Not Match Please try again";
            echo "<script type='text/javascript'>alert('$message');location='forgetpassword.php'</script>";
        }   
    }
    session_destroy();
?>