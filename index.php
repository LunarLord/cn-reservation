<?php 
include_once ('config.php');
include_once ('functions.php');
$agendar =  isset($_REQUEST['action']);


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
<?php update_reservation() ?>
<body>
  <nav class="navbar bg-light fixed-top border">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logotipo.png" alt="" width="239" height="37" class="d-inline-block align-text-top">
      </a>
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">SAC</a>
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
  <script src="script.js"></script>
  <div class="container-fluid">
    <h2><?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($dados); ?></h2>

</div>
</div>
<?php
include("assets/html/htmlb.html");
?>

  <!-- Modal -->
  <div class="modal fade" id="success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Aviso:</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Mesa reservada com sucesso.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          
        </div>
        
      </div>
    </div>
  </div>
</body>

</html>