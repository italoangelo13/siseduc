<?php
    // session_start inicia a sessão
  session_start();

  if($_SESSION['login'] != true){
    ?>
    <meta http-equiv="refresh" content=0;url="login.php">
    <?php
  }
  else{
  	session_destroy();
    ?>
    <meta http-equiv="refresh" content=3;url="login.php">
    <?php
  }
?>