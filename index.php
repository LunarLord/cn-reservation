<?php 
session_start();
if((!isset ($_SESSION['name']) == true) and (!isset ($_SESSION['password']) == true))
{
  header('location: login.php');
  }
require_once("config.php");
require("functions.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Reservas CN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <nav class="navbar bg-light fixed-top border">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="assets/img/logotipo.png" alt="" width="239" height="37" class="d-inline-block align-text-top">
      </a>
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link"><b> <?php print_r($_SESSION['name']) ?></b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.centernorte.com.br/quem-somos/">Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.centernorte.com.br/fale-conosco/">SAC</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php?token='.md5(session_id()).'">Sair</a>
              </li>
            </ul>
          </div>
        </div>
    </div>
  </nav>  
    <body class="body-1">
  <div class="container-fluid border" style="margin-top: 10%;">
<div>
  <form action="reserva.php" name="1" method="post">
<button name="1" <?php disabled1($dbconn) ?> value="1">Segunda - Feira</button> Referente ao dia 08/08<br>
<h4>Posições disponíveis: <?php selectrows1($dbconn);?></h4><br>
  </form>
</div>
<div>
  <form action="reserva.php" name="2" method="post">
<button name="2" <?php disabled2($dbconn) ?> value="2">Terça - Feira</button> Referente ao dia 09/08<br>
<h4>Posições disponíveis: <?php selectrows2($dbconn);?></h4><br>
  </form>
</div>  
<div>
  <form action="reserva.php" name="3" method="post">
<button name="3" <?php disabled3($dbconn) ?> value="3">Quarta - Feira</button> Referente ao dia 10/08<br>
<h4>Posições disponíveis: <?php selectrows3($dbconn);?></h4><br>
  </form>
</div>
<div>
  <form action="reserva.php" name="4" method="post">
<button name="4" <?php disabled4($dbconn) ?> value="4">Quarta - Feira</button> Referente ao dia 11/08<br>
<h4>Posições disponíveis: <?php selectrows4($dbconn);?> </h4><br>
  </form>
</div>

<div>
  <form action="reserva.php" name="5" method="post">
<button name="5" <?php disabled5($dbconn) ?> value="5">Quinta - Feira</button> Referente ao dia 12/08<br>
<h4>Posições disponíveis: <?php selectrows5($dbconn);?></h4><br><br>
  </form>
</div>
  </div>

  <?php if($_SESSION['level'] == '1'){
    echo '<button name="limpar" data-target="#alerta" data-toggle="modal" value="limpar">LimparBD</button>';
  }else{
    echo '<form action="reagendar.php" name="limpar" value="limpar" method="POST">
    <button name="limpar" value="limpar">Reagendar</button>
    </form>';
  } ?>

<!-- Modal -->
<div class="modal fade" id="alerta" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Aviso</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        Esta ação ira limpar TODOS os registros agendados, deseja continuar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <form action="limpar.php" name="limpar" value="limpar" method="POST">
        <button type="submit" class="btn btn-primary">Sim</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>