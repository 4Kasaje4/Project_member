<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update_description</title>
    <link rel="stylesheet" href="update_description.css">
</head>
<body>
    <div class="box">
        <div id="center">
            <form action="db_update_data.php" method="POST"> 
                <label>Description</label><br><br>
                <input type="text" name="info" required><br><br><br>
                <input type="submit" id="submit" value="Change">
            </form>
        </div>
    </div>
</body>
</html>