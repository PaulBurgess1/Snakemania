<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnakeMania - Home</title>
    <link href="styles.css" rel="stylesheet">
    <?php include('processRegister.php'); ?>
    
</head>

<body>

<ul class="format">
    <li><img class="left_ad" src="images/art.png"></li>
    <li>
    <div class="main_body">
        
        <div class="menu_top">
        <?php include 'Navbar.php' ?>
        <div class="page_body"><!--register body-->
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                
                    <br><label>Username</label><br>
                    <input type="text" name=userName><br>
                    <label class="error" style="color:red"><?= $userName_error ?></label><br>
                    <label>Password</label><br>
                    <input type="text" name=password><br>
                    <label class="error" style="color:red"><?= $password_error ?></label><br>
                    <label>Password again</label><br>
                    <input type="text" name=passwordCheck><br>
                    <label class="error"><?= $passwordCheck_error ?></label><br>
                    <button class="btn" type="submit" value="submit" name="submit">Sign me Up!</button>
            </form>
        </div>
        
    </div>
    </li>
        <li><img class="right_ad" src="images/art.png"></li>
    </ul>



</body>
</html>