<?php
$conn = new mysqli('localhost','root','','SnakemaniaDB');
?>

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
    <div class="main_body">
        
        <div class="menu_top">
            <ul>
                <li><a href="Home.html">Home</a></li>
                <li style="float: right;"><a href="loginPage.html">Login</a></li>
                <li style="float: right;"><a href="Home.html">Logout</a></li>
            </ul>
        </div>
        <div class="title"></div>
        <div class="page_body"><!--HomePage body-->
        <?php
            $insert="INSERT INTO snakemaniadb (username, password, hiscore)
            VALUES ('1234567', '3333333333333333', '42')";
            
            if (mysqli_query($conn, $insert)) {
                echo "Successfully Added to the Database";
            } else {
                echo "Error: " . $insert . "<br>" . mysqli_error($conn);
            }
            
            
            $query = "SELECT * FROM snakemaniadb;";
            $result = mysqli_query($conn,$query);

            $q_rows = mysqli_num_rows($result);

            if ($q_rows){//Not Empty
                echo "<table>";
                echo "<tr>";
                echo "<th>Username</th>";
                echo "<th>Password</th>";
                echo "<th>Hi-Score</th>";
                echo "</tr>";
                $row = mysqli_fetch_assoc($result);
                while ($row){
                    $uname=utf8_encode($row['username']);
                    $pword=utf8_encode($row['password']);
                    $hscore=utf8_encode($row['hiscore']);
                    
                    echo "<tr>";
                    echo "<td><p> $uname <p></td>";
                    echo "<td><p> $pword </p></td>";
                    echo "<td><p> $hscore </p></td>";
                    echo "</tr>";

                    $row = mysqli_fetch_assoc($result);
                }
                echo "</table>";
            }

            
        ?>



        </div>
        
    </div>
    </li>
        <li><img class="right_ad" src="images/art.png"></li>
    </ul>



</body>
</html>
