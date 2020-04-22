<?php
    if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnakeMania - Login</title>
    <link href="styles.css" rel="stylesheet">
    <?php include('processLogin.php'); ?>
    
</head>

<body>

<ul class="format">
    <li><img class="left_ad" src="images/art.png"></li>
    <li>
    <div class="main_body">
        
        <?php include 'Navbar.php' ?>
        <div class="page_body"><!--login body-->
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <br><label>Username</label><br>
                    <input type="text" name=userName><br>
                    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <label class="error"><?= $userName_error ?></label><br><br>
                    <label>Password</label><br>
                    <input type="text" name=password><br>
                    <label class="error"><?= $password_error ?></label><br><br>
                    <label>Snake Colour</label><br>
                    <input type="color" name="favorite"><br><br>
                    
                    <button class="btn" type="submit" value="submit" name="submit">Login</button>
            </form>
        </div>
        
    </div>
    </li>
        <li><img class="right_ad" src="images/art.png"></li>
    </ul>



</body>
</html>
