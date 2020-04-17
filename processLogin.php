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
}
?>