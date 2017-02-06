<!doctype html>
 <html lang="pt-br">
  <head>
    <title>Siseduc - Sistema de Gerenciamento Educacional</title>
    <meta name="keywords" content="Central, Informatica, Escola">
    <meta name="description" content="Sistema Informatizado da Central de Informatica">
    <meta name="author" content="Italo Angelo">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/painel.css">
<?php
  require_once '../config/config.php';
  
  // session_start inicia a sessão
  session_start();

  if(($_SESSION['login'] != true) and ($_SESSION['categoria'] != 1)){
    ?>
    <meta http-equiv="refresh" content=0;url="login.php">
    <?php
  }
  
  $nome = $_SESSION['nome'];
  $codigo = $_SESSION['codigo_user'];
  $login = $_SESSION['login'];
  $categoria = "Diretor";
  $data = date("d/m/Y");
  

?>

  </head>
  
  <body class="fundo">
    <div id="geral" class="container">
      <header class="row">
        <div class="barra-topo">
          <label class="label label-success label-topo">Diretor <?php echo $nome; ?></label>
          <a class="link" href="logout.php">Sair</a>
        </div>
      </header>
     
      <div class="row box-pessoais">
        <div class="col-lg-3">
          <img src="../assets/img/italo.jpg" width="100%" style="border:3px solid #fff; border-radius: 500px; box-shadow: 10px 5px 10px rgba(0,0,0,0.8);"/>
        </div>
        
        <div class="col-lg-9 info" style="padding-left:50px;">
          <h3>Informações Pessoais</h3>
          <label class="label label-warning" style="float:right; margin-right:10px;"><?php echo $data; ?></label>
          <hr>
          <h3>Nome: <label style="color: #ff0;"><?php echo $nome; ?></label></h3>
          <h4>Codigo: <small><?php echo $codigo; ?></small></h4>
          <h4>Login: <small><?php echo $login; ?></small></h4>
          <h4>Categoria: <small><?php echo $categoria; ?></small></h4>
          <h4>Senha: <small>Confidencial</small></h4>
          <button style="float: right; bottom: 85px; position: relative;" type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
            Editar Perfil
          </button>
        </div>
      </div>
      
      <div class="row box-btn">
        <h3>Painel Administrativo</h3>
        <hr>
        <a href="#">
          <div class="col-lg-3 botao">
            <img src="../assets/img/aluno.png" width="100%" />
            <label>Alunos</label>
          </div>
        </a>
        
        <a href="#">
          <div class="col-lg-3 botao">
            <img src="../assets/img/colaboradores.png" width="100%" />
            <label class="txt-label">Colaboradores</label>
          </div>
        </a>
        
        <a href="#">
          <div class="col-lg-3 botao">
            <img src="../assets/img/grafico.png" width="100%" />
            <label>Estatisticas</label>
          </div>
        </a>
        
        <a href="#">
          <div class="col-lg-3 botao">
            <img src="../assets/img/relatorio.png" width="100%" />
            <label>Relatórios</label>
          </div>
        </a>
        
        <a href="#">
          <div class="col-lg-3 botao">
            <img src="../assets/img/turma.png" width="100%" />
            <label>Turmas</label>
          </div>
        </a>
        
        <a href="#">
          <div class="col-lg-3 botao">
            <img src="../assets/img/curso.png" width="100%" />
            <label>Disciplinas</label>
          </div>
        </a>
      </div>








      <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Perfil</h4>
              </div>
              <div class="modal-body">
                Formulario
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success">Salvar Alterações</button>
              </div>
            </div>
          </div>
        </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    
  </body>
</html>