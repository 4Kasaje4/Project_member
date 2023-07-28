<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="resetpassword.css">
</head>
<body>
    <div class="logoreset">
        Reset Password
    </div>
    <div class="box">
        <div id="box">
            <form action="updatedata.php" method="POST">
                <label>Hi 
                    <?php 
                        session_start();  
                        $name = $_SESSION['firstname'];
                        require('dbconnect.php');
                        $sql = "SELECT fristname ,lastname FROM member WHERE fristname='$name'";
                        $sql = mysqli_query($con,$sql); 
                        while($v = mysqli_fetch_assoc($sql)){
                            echo $v['fristname'] . " " . $v['lastname'];
                        }                
                ?></label><br><br>
                <div id="message">
                    <label >New password</label><br><br>
                </div>
                <input type="text" name="newpassword" required><br><br>
                <div id="message2">
                    <label >Confirm password</label><br><br>
                </div>
                <input type="text" name="confirmpassword" required><br><br>
                <input type="submit" value="Submit" id="submit">
            </form>
        </div>
    </div>
</body>
</html>