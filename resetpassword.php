<?php

    require('dbconnect.php');
    session_start();


    $_SESSION['name'] = $_POST['username'];
    $_SESSION['firstname'] = $_POST['firstname'];
    $firstname = $_SESSION['firstname'];

    $sql = "SELECT fristname FROM member WHERE fristname= '$firstname'";
    $sql = mysqli_query($con,$sql);
    $num = mysqli_num_rows($sql);
    if($num == 1){
        header('location:reset.php');
    }
    else{
        $noAct = "No Account Please Try again";
        echo "<script type='text/javascript'>alert('$noAct');location='forgetpassword.php'</script>";
    }
?>