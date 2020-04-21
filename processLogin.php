<?php
if (!isset($_SESSION)) session_start();
$conn = new mysqli('localhost','root','','SnakemaniaDB');
$userName_error=$password_error="";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userName=$conn->real_escape_string($_POST['userName']);
    $password=$_POST['password'];
    $favorite=$_POST['favorite'];
    
    if (empty($userName)){
        $userName_error="username field was empty";
    }
    if (empty($userName)){
        $password_error="username field was empty";
    }
    if($userName_error == '' and $password_error == ''){
        unset($_POST['submit']);
        $search="SELECT password FROM snakemaniadb WHERE username='$userName';";

        if ($result=mysqli_query($conn,$search)){
            $q_rows = mysqli_num_rows($result);
            if ($q_rows==0){
                $userName_error="username does not exist";
            }else{
                $row = mysqli_fetch_assoc($result);
                if(password_verify($password, $row['password'])){
                    //gotta talk with erwin on this part
                    $_SESSION['username']=$userName;
                    $_SESSION['color']=$favorite;
                    header("Location: Home.php");
                    exit();
                }
                else{
                    $password_error="password was incorrect";
                }
            }
        }
    }
}
?>
