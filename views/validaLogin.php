<?php
  require_once '../config/config.php';
  
  // session_start inicia a sessão
  session_start();

  $loginInfo = $_REQUEST['login'];
  $senhaInfo = $_REQUEST['senha'];
  
  $sql_login = "SELECT * FROM tb_usuario where login_usuario = '$loginInfo'";
  $consulta = mysqli_query($conexao,$sql_login);
  $registros = mysqli_num_rows($consulta);
?>

<!doctype html>
 <html lang="pt-br">
  <head>
    <title>Siseduc - Sistema de Gerenciamento Educacional</title>
    <meta name="keywords" content="Central, Informatica, Escola">
    <meta name="description" content="Sistema Informatizado da Central de Informatica">
    <meta name="author" content="Italo Angelo">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
  </head>
  
  <body class="fundo-login">
    <div id="geral" class="container">
      <div>
        <center><img style="margin-top:150px;" src="../assets/img/logo-siseduc.png" width="30%"/></center>
        <P>
          <?php
            if ($registros <=0){
              $msg = "Este login não está cadastrado, aguarde para tentar novamente!";
            ?>
            <h1 class="alert alert-danger"><center><?php echo $msg; ?></center></h1>
            <?php
            }
            else{
              While($resultado = mysqli_fetch_assoc($consulta)){
                $codigo = $resultado['cod_usuario'];
                $nome_cad = $resultado['nome_usuario'];
                $login_cad = $resultado['login_usuario'];
                $senha_cad = $resultado['senha_usuario'];
                $categoria = $resultado['cod_categoria'];
                $foto = $resultado['img_usuario'];
              }
              
              if ($loginInfo == $login_cad){
                if ($senhaInfo == $senha_cad){
                  ?>
                    <h1 class="alert alert-success"><center>Efetuando Login, Aguarde um Momento.</center></h1>
                  <?php
                  $_SESSION['login'] = $login_cad;
                  $_SESSION['senha'] = $senha_cad;
                  $_SESSION['codigo_user'] = $codigo;
                  $_SESSION['nome'] = $nome_cad;
                  $_SESSION['categoria'] = $categoria;
                  $_SESSION['foto'] = $foto;
                  ?>
                <meta http-equiv="refresh" content=5;url="painelDiretor.php">
                <?php
                }
                else{
                  ?>
                    <h1 class="alert alert-danger"><center>Senha incorreta, aguarde para tentar novamente!</center></h1>
                    <meta http-equiv="refresh" content=5;url="login.php">
                  <?php
                }
              }
            }
            ?>            
        </P>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    
  </body>
</html>