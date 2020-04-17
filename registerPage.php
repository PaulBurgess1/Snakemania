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
                <li style="float: right;"><a href="#">Login</a></li>
                <li style="float: right;"><a href="Home.html">Logout</a></li>
            </ul>
        </div>
        <div class="title"></div>
        <div class="page_body"><!--register body-->
            <form action="processRegister.php" method="post">
                
                    <br><label>Username</label><br>
                    <input type="text" name=userName><br><br>
                    <label>Password</label><br>
                    <input type="text" name=password><br><br>
                    <label>Password again</label><br>
                    <input type="text" name=passwordCheck><br><br>
                    <button class="btn" type="submit" value="submit" name="submit">Sign me Up!</button>
                    <br><label>Instructions </label><br>
                    <br><label name="rule1">1. Username must not have special char</label><br>
                    <br><label name="rule2">2. all fields must be filled</label><br>
                    <br><label name="rule3">3. Must enter the same password twice</label><br>
                    <br><label name="rule4">4. Username must not already be in use</label><br>
            </form>
        </div>
        
    </div>
    </li>
        <li><img class="right_ad" src="images/art.png"></li>
    </ul>



</body>
</html>