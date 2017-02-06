

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
      <div id="box-index">
        <center><img src="../assets/img/logo-siseduc.png" width="30%"/></center>
        <center><form method="POST" action="validaLogin.php" class="box-login" style="width:30%;">
          <fieldset >
            <center><legend style="color:#fff">Área de Login</legend></center>
            <center>
            <table>
              <tr>
                <center><td>
                  <input class="campos" type="text" name="login" placeholder="Login">
                </td></center>
              </tr>
              <tr>
                <center><td>
                  <input class="campos" type="password" name="senha" placeholder="Senha">
                </td></center>
              </tr>
              <tr>
                <center><td>
                  <center><button id="logar" type="submit" class="btn btn-success" style="width:50%; height:30px; margin-bottom: 10px;">Entrar</button></center>
                </td></center>
              </tr>
            </table>
            </center>
          </fieldset>
        </form></center>
      </div>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    
  </body>
</html>