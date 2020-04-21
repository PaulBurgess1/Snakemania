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
            <button class='btn' onclick="window.location.href='gamePage.php';">
            <?php
            $gamePage="'gamePage.php'";
            if ($username == ""){
                echo "Play as Guest</button><br>";

            } else {
                echo "Play as $username</button><br>";

            }
            ?>

            <button class="btn" onclick="window.location.href='Leaderboard.php';">Leaderboard</button>
            <section id="video">
            <iframe width="495" height="315" src="https://www.youtube.com/embed/0HXMYm4k6w0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>



        </div>
        
    </div>
    </li>
        <li><img class="right_ad" src="images/art.png"></li>
    </ul>



</body>
</html>