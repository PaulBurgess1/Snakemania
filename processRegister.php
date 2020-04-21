
<?php

$conn = new mysqli('localhost','root','','SnakemaniaDB');
$userName_error=$password_error=$passwordCheck_error="";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    $passwordCheck=$_POST['passwordCheck'];
    //do error checks for username
    if (empty($userName)){
        $userName_error="username field was empty";
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$userName)){
        $userName_error="username must not have special characters";
    }
    else if(strlen($userName)<=5){
        $userName_error="username must be atleast 5 characters long";
    }
    else if(strlen($userName)>=10){
        $userName_error="username must under 10 characters long";
    }
    //do error checks for username
    if (empty($password)){
        $password_error="password field was empty";
    }
    else if(strlen($password)<5){
        $password_error="password must be atleast 5 characters long";
    }
    else if(strlen($password)>10){
        $password_error="password must under 10 characters long";
    }
    //do error check for password check
    if ($password != $passwordCheck){
        $passwordCheck_error="does not match password";
    }
    if($userName_error == '' and $password_error == '' and $passwordCheck_error == ''){
        unset($_POST['submit']);
        $search="SELECT username FROM snakemaniadb WHERE username='$userName';";
        if ($result=mysqli_query($conn,$search)){
            $q_rows = mysqli_num_rows($result);
            $hash_pass= password_hash($password, PASSWORD_DEFAULT);
            if ($q_rows==0){
                $insert="INSERT INTO snakemaniadb (username, password, hiscore)
                VALUES ('$userName', '$hash_pass', '0')";
                if (mysqli_query($conn, $insert)) {
                    header("Location: Home.html");
                    exit();
                }
            }else{
                $userName_error="username is already taken";
            }
        }
    }
}
?>
