<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updatePhone</title>
    <link rel="stylesheet" href="update_phone.css">
</head>
<body>
<div class="box">
        <div id="center">
            <form action="db_update_phone.php" method="POST"> 
                <label>Phone Number</label><br><br>
                <input type="text" name="phone" required><br><br><br>
                <input type="submit" id="submit" value="Change">
            </form>
        </div>
    </div>
</body>
</html>