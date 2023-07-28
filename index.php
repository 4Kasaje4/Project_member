<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="centerbox">
    <div class="welcome">
        <h1>Welcome</h1>
    </div>
    </div>
    <div class="box">
        <div id="center">
        <form action="login.php" method="POST"> 
            <label>Username</label><br><br>
            <input type="text" name="Uname" id="input-login" required><br><br>
            <label>Password</label><br><br>
            <input type="password" name="Pname" id="input-login" required><br><br>
            <div class="login">
                <input type="submit" name="login" id="login" value="Login">
            </div>
        </form> 
        </div>
        <div id="registerandforgetpassword">
        <a href="register.php" id="register">register</a><br>
        <a href="forgetpassword.php" id="forgetpassword">forgetpassword</a>
        </div>
    </div>
</body>
</html>