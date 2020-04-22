<?php


  session_start();#Non-Function Req

  $_SESSION['username']='';
  $_SESSION['color']="#FFFFFF";

 
    header('Location: Home.php');
  ?>