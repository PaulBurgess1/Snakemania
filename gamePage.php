<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>SnakeMania</title>
    <link href="gamePage.css" rel="stylesheet">
</head>

<?php include 'Navbar.php' ?>

<?php
    if($_GET){
        echo $_GET['user'];
    } else{
        echo "no user";
    }
?>

<p id="colorDom"> <?php echo htmlspecialchars($color); ?></p>
<?php
    // Hex colour inverse function from: https://www.jonasjohn.de/snippets/php/color-inverse.htm
    function color_inverse($color){
        $color = str_replace('#', '', $color);
        if (strlen($color) != 6){ return '000000'; }
        $rgb = '';
        for ($x=0;$x<3;$x++){
            $c = 255 - hexdec(substr($color,(2*$x),2));
            $c = ($c < 0) ? 0 : dechex($c);
            $rgb .= (strlen($c) < 2) ? '0'.$c : $c;
        }
        return '#'.$rgb;
    }
    $newBackground = color_inverse($color);
?>
<p id="backDom"> <?php echo htmlspecialchars($newBackground); ?></p>

<script>
    var div = document.getElementById("colorDom");
    var color = div.textContent;
    var newBackground = htmlspecialchars(color_inverse(color));
    if (newBackground == undefined || newBackground == null)
        newBackground = 'white';
            
    // document.getElementById("colorDom").style.display = "none"; 
    // document.getElementById("backDom").style.display = "none"; 
</script>

<!-- TODO: MAKE THE LEADERBOARDS AUTO SCROLL SCORES ... if possible idk if we even need leaderboard -->
<!-- TODO: MAKE THE GAME START ON START BUTTON PRESS INSTEAD OF INSTANTLY LOADING IT -->
<body>
    <div class="gameContainer">
        <div id="startScreen">
            <p>START SCREEN</p>
            <script type="text/javascript">
                document.addEventListener("keydown", e => {
                    if(e.keyCode == 82)
                        document.getElementById("startScreen").style.display = "none"; 
                        
                        document.getElementById("endScreen").style.display = "none";
                });
            </script>
        </div>

        <div id="endScreen">
            <p>END SCREEN</p>
        </div>
        <script type="text/javascript">
            document.getElementById("endScreen").style.display = "none";  
        </script>

        <canvas id="gameCanvas" style="background-color:<?php echo $newBackground ?>;"width="960px" height="540px"></canvas>       
        
        <div class="howTo">
            <p>HOW TO PLAY</p>
            <table>
                <tr><p>R - start/restart game</p></tr>
                <tr><p>W - snake goes UP</p></tr>
                <tr><p>A - snake goes LEFT</p></tr>
                <tr><p>S - snake goes DOWN</p></tr>
                <tr><p>D - snake goes RIGHT</p></tr>
            </table>
            
        </div>
    </div>
    <div class="leaderboardContainer">
        <div class="gradient-border"></div>
        <div id="leaderboard" class="leaderboard">
            <p>LEADERBOARD</p>
        </div>
    </div>
</body>
</html>
<script src="snake.js"></script>