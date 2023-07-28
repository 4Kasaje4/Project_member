<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgetpassword</title>
    <link rel="stylesheet" href="forgetpassword.css">
</head>
<body>
    <div id="logoforgetpassword">
        Forget Password
    </div>
    <div id="box">
        <div id="form">
            <form action="resetpassword.php" method="POST">
                <br><br><label>Username</label><br><br>
                <input type="text" name="username" id="input" required><br><br>
                <label>Firstname</label><br><br>
                <input type="text" name="firstname" id="input" required><br><br>
                <input type="submit" name="enter" id="enter" value="Reset password"><br><br>
            </form>
        </div>
        
    </div>
</body>
</html>