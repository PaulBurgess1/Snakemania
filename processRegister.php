<!DOCTYPE html>
<html>
<body>
<?php
$conn = new mysqli('localhost','root','','SnakemaniaDB');

if(isset($_POST["submit"])){
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    $passwordCheck=$_POST['passwordCheck'];
    //make it fancy 
    if (empty($userName)||empty($password)||empty($passwordCheck)){
        header("Location: registerPage.php?error=emptyfields&uid=".$userName);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$userName)){
        header("Location: registerPage.php?error=noSPecialCharfor_username");
        exit();
    }
    else if ($password != $passwordCheck){
        header("Location: registerPage.php?error=passwordMustMatch");
        exit();
    }else{
        $search="SELECT username FROM snakemaniadb WHERE username=$userName;";
        if ($result=mysqli_query($conn,$search)){
            $q_rows = mysqli_num_rows($result);
            if ($q_rows==0){
                $insert="INSERT INTO snakemaniadb (username, password, hiscore)
                VALUES ($userName, $password, '0')";
                if (mysqli_query($conn, $insert)) {
                    header("Location: DBTest.php");
                    exit();
                }
            }else{
                header("Location: registerPage.php?error=usernametaken");
                exit();
            }
        }
    }
}else{
    header("Location: registerPage.php");
    exit();
}

?>
</body>
</html>