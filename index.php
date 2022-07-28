<?php session_start();
if((!isset ($_SESSION['name']) == true) and (!isset ($_SESSION['password']) == true))
{
  header('location: login.php');
  }

$logado = $_SESSION['name'];
 ?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Center Norte</title>
  <!--Core Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!--Core CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
</head>
<body>
 < <nav class="navbar bg-light fixed-top border">
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
  <!--Core Javascript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <div class="container-fluid">
    <h2>Reserve sua mesa</h2>

</div>
</div>
<?php
include_once("config.php");
include_once("functions.php");
include("assets/html/htmlb.php");
?>
</body>

</html>