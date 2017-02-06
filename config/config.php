<?php
  header('Content-Type: text/html; charset=utf-8');

  $servidor = "127.0.0.1"; 
  $usuario = "root"; 
  $senha = "";
  $banco = "siseduc";
  
  
  $conexao = mysqli_connect($servidor, $usuario, $senha); 
    mysqli_select_db($conexao, $banco);

    if($conexao){
     
    }
    else {
      echo "não conectou";
    }
      mysqli_query($conexao,"SET NAMES 'utf8'");
      mysqli_query($conexao,'SET character_set_connection=utf8');
      mysqli_query($conexao,'SET character_set_client=utf8');
      mysqli_query($conexao,'SET character_set_results=utf8');



  
  function desconectar($varConect){
    mysqli_close($varConect);
  }

?>
