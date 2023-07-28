<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="title">
        Welcome <?php
        
        session_start();
        require('dbconnect.php');
        $_SESSION['username'];
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM member WHERE username = '$username'";
        $sql = mysqli_query($con , $sql);
        while($x = mysqli_fetch_assoc($sql)){
            echo $x['fristname'] . " " . $x['lastname'] .".";
        }        
        ?>
    </div>
    <div id="box">
        <form action="update_name.php" method="POST">
            <div id="box-name">
                <div id="name-name">
                Name
                </div>
                <input type="submit" name="edit_name" value="Edit" id="edit_name">
            </div>
            <div id="name_data">
                <label >
                    <?php 
                    require('dbconnect.php');
                    $_SESSION['username'];
                    $username = $_SESSION['username'];
                    $sql = "SELECT * FROM member WHERE username = '$username'";
                    $sql = mysqli_query($con , $sql);
                        while($x = mysqli_fetch_assoc($sql)){
                        echo $x['fristname'] . " " . $x['lastname'] ;
                        }
                    ?>
                </label>
            </div>
        </form>
        <form action="update_description.php" method="POST">
            <div id="box-in-box">
                <div id="box-left">
                    Description  
                </div>
                <input type="submit" name="edit_description" value="Edit" id="edit-description">
            </div>
            <div id="description">
                <div id="message">
                <?php 
                    require('dbconnect.php');
                    $_SESSION['username'];
                    $username = $_SESSION['username'];
                    $sql = "SELECT * FROM member WHERE username = '$username'";
                    $sql = mysqli_query($con , $sql);
                        while($x = mysqli_fetch_assoc($sql)){
                        echo $x['info'];
                        }
                    ?>           
                </div>
            </div>
        </form>
        <form action="update_phone.php" method="POST">
            <div id="box-in-box">
                <div id="box-left">
                    Phone  
                </div>
                <input type="submit" name="edit_description" value="Edit" id="edit-description">
            </div>
            <div id="description">
                <div id="message">
                <?php 
                    require('dbconnect.php');
                    $_SESSION['username'];
                    $username = $_SESSION['username'];
                    $sql = "SELECT * FROM member WHERE username = '$username'";
                    $sql = mysqli_query($con , $sql);
                        while($x = mysqli_fetch_assoc($sql)){
                        echo $x['phone'];
                        }
                    ?>           
                </div>
            </div>
        </form>
        <form action="update_address.php" method="POST">
            <div id="box-in-box">
                <div id="box-left">
                    Address  
                </div>
                <input type="submit" name="edit_address" value="Edit" id="edit-description">
            </div>
            <div id="description">
                <div id="message">
                <?php 
                    require('dbconnect.php');
                    $_SESSION['username'];
                    $username = $_SESSION['username'];
                    $sql = "SELECT * FROM member WHERE username = '$username'";
                    $sql = mysqli_query($con , $sql);
                        while($x = mysqli_fetch_assoc($sql)){
                        echo $x['address'];
                        }
                    ?>           
                </div>
            </div>
        </form>
    </div>
    <div id="footer">
        <div id="delete_data_box">
            <form action="delete_data.php" method="POST">
            <input type="submit" name="delete_data" id="delete_data" value="Delete">
            </form>
        </div>
        <div id="logout-box">
            <form action="logout.php" method="POST">
            <input type="submit" name="logout" id="logout" value="Logout">
            </form>
        </div>
    </div>
</body>
</html>