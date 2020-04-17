<?php
$conn = new mysqli('localhost','root','','SnakemaniaDB');
$userName_error=$password_error="";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    if (empty($userName)){
        $userName_error=" |username field was empty| ";
    }
    if (empty($userName)){
        $password_error=" |username field was empty| ";
    }
    if($userName_error == '' and $password_error == ''){
        unset($_POST['submit']);
        $search="SELECT password FROM snakemaniadb WHERE username='$userName';";
        if ($result=mysqli_query($conn,$search)){
            $q_rows = mysqli_num_rows($result);
            if ($q_rows==0){
                $userName_error=" |username does not exist| ";
            }else{
                $row = mysqli_fetch_assoc($result);
                if(password_verify($password, $row['password'])){
                    //gotta talk with erwin on this part
                    echo "done";
                }
                else{
                    $password_error=" |password was incorrect| ";
                }
            }
        }
    }
}
?>
