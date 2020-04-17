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
            $query = "SELECT password FROM snakemaniadb WHERE username ='EEEEEEEE';";
            $result=mysqli_query($conn,$query);
			$row = mysqli_fetch_assoc($result);
			
			echo $row['password'];

            if(password_verify("Password",$row['password'])){
				echo "       Good";
			}
			else{
					echo    "   bad";
			}
            //echo $is_good;
            
        ?>



        </div>
        
    </div>
    </li>
        <li><img class="right_ad" src="images/art.png"></li>
    </ul>



</body>
</html>
