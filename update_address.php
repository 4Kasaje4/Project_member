<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateAddress</title>
    <link rel="stylesheet" href="update_address.css">
</head>
<body>
<div class="box">
        <div id="center">
            <form action="db_update_address.php" method="POST"> 
                <label>Address</label><br><br>
                <input type="text" name="address" required><br><br><br>
                <input type="submit" id="submit" value="Change">
            </form>
        </div>
    </div>
</body>
</html>