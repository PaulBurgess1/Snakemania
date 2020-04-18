<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnakeMania - Home</title>
    <link href="styles.css" rel="stylesheet">
    
</head>

<body>

<ul class="format">
    <li><img class="left_ad" src="images/art.png"></li>
    <li>
        <?php include 'Navbar.php' ?>
        <div class="page_body"><!--HomePage body-->
            
            <button class="btn" onclick="window.location.href='registerPage.php';">Registration</button><br>
            <?php
            if ($username == ""){
                echo "<button class='btn' onclick='window.location.href='gamePage.html';'>Play as Guest</button><br>";
            }
            else{
                echo "<button class='btn' onclick='window.location.href='gamePage.html';'>Play as $username</button><br>";
            }

            ?>
            <button class="btn" onclick="window.location.href='DBTest.php';">Memes</button>




        </div>
        
    </div>
    </li>
        <li><img class="right_ad" src="images/art.png"></li>
    </ul>



</body>
</html>