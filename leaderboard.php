<?php
$conn = new mysqli('localhost','root','','SnakemaniaDB');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnakeMania - Leaderboards</title>
    <link href="styles.css" rel="stylesheet">
    
</head>

<body>
<ul class="format">
<li><img class="left_ad" src="images/art.png"></li>
    <li>
    <?php include 'Navbar.php' ?>
        <div class="page_body"><!--HomePage body-->
        <?php
            $query = "SELECT username,hiscore FROM snakemaniadb ORDER BY hiscore DESC;";
            $result = mysqli_query($conn,$query);

            $q_rows = mysqli_num_rows($result);
            if ($q_rows){//Not Empty
                echo "<table>";
                echo "<tr>";
                echo "<th>Username</th>";
                echo "<th>Hi-Score</th>";
                echo "</tr>";
                $row = mysqli_fetch_assoc($result);
                while ($row){
                    $uname=utf8_encode($row['username']);

                    $hscore=utf8_encode($row['hiscore']);
                    
                    echo "<tr>";
                    echo "<td><p> $uname <p></td>";
                    echo "<td><p> $hscore </p></td>";
                    echo "</tr>";

                    $row = mysqli_fetch_assoc($result);
                }
                echo "</table>";
            }
        ?>
</div>
</li>
        <li><img class="right_ad" src="images/art.png"></li>
    </ul>
    
</body>
</html>

