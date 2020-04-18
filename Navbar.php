<?php
  if (!isset($_SESSION)) session_start();


  if (isset( $_SESSION['username'])) {
    $username = $_SESSION['username'];
  } else {
    $username = "";
  }

  if (isset( $_SESSION['color'])) {
    $color = $_SESSION['color'];
  } else {
    $color = "#FFFFFF";
  }

  function change_color($new_color){
    $color=$new_color;
}
?>
<div class="menu_top">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <?php
                     if ($username == ""){
                        echo "<li style='float: right;'><a href='loginPage.php'>Login</a></li>";
                     }
                     else{
                        echo "<li style='float: right;'><a>Logged in as: $username</a></li>";
                        echo "<li>
                        <label for='color_nav'>Color:</label>
                        <input type='color' value=$color id='color_nav' disabled>
                        </li>";
                        echo "<li style='float: right;'><a href='logout.php'>Logout</a></li>";
                     }
                     ?>
                
            </ul>
        </div>
        <div class="title"></div>


