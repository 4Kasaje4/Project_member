<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updatename</title>
    <link rel="stylesheet" href="update_name.css">
</head>
<body>
    <div class="box">
        <div id="center">
            <form action="db_update_name.php" method="POST">
                <label>Firstname</label><br><br>
                <input type="text" name="fname" required><br><br>
                <label>Lastname</label><br><br>
                <input type="text" name="lname" required><br><br><br>
                <input type="submit" value="Change" id="submit">
            </form>
        </div>
    </div>
</body>
</html>