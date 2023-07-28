<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div id="logoregister">
        Register
    </div>
    <div class="registerbox">
        <div class="center">
        <form action="insertdata.php" method="POST">
            <br><br><label>Firstname</label><br><br>
            <input type="text" name="firstname" required><br><br>
            <label>Lastname</label><br><br>
            <input type="text" name="lastname" required><br><br>            
            <label>Username</label><br><br>
            <input type="text" name="username" required><br><br>
            <label>Password</label><br><br>
            <input type="password" name="password" required><br><br>
            <label>Confirm Password</label><br><br>
            <input type="password" name="confirm_password"><br><br>
            <input type="submit" value="Submit" id="submit"><br><br>
        </form>
        </div>
    </div>
</body>
</html>