<?php
  
  $login = $_POST['login'];//buscando parametros  
  $senha = $_POST['senha'];

  if($login == "leoni" && $senha == "523654" || $login == "eduardo" && $senha == "123456"){

  // validando do login

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ATLANTIC</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.min.css'>
    <style type="text/css">
        a{
            color: #17a2b8;
        }
        body{
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <!-- nav para escolha de comando-->
    <div class="row bg-info">
        <div class="col-md-12 text-center">
            <img src="../img/logo.png" class="brand-logo" width="175">    
        </div>
    </div>
  <ul class="nav justify-content-center">
  <li class="nav-item ">
    <a class="nav-link active" href="../view/alternativo.html">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../view/reserva.html">Reserva</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../view/servicos.html">Serviços</a>
  </li>
    <li class="nav-item">
      <a class="nav-link" href="../view/reclamacao.html">Reclamações</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="../view/encerra.html">Encerrar</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="../control/index.php">Sair</a>
  </li>
  </ul>

    <br><br>
        <!-- carousel de enfeite para deixar o site mais vistoso e bonito-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <!-- slides do carousel para indicar a ordem e por onde começa-->
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner text-center">
    <div class="carousel-item active">
      <!-- seleçãode imagens e formatação de tamanhos-->
      <img class="d-block img-fluid w-100" src="../img/novo1.jpg" heigth="100px" alt="Piscina">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid w-100" src="../img/novo2.jpg" heigth="100px" alt="Lobby">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid w-100" src="../img/novo3.jpg" heigth="100px" alt="Crianças">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid w-100" src="../img/novo4.jpg" heigth="100px" alt="Restaurante">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid w-100" src="../img/novo5.jpg" heigth="100px" alt="Quarto Infantil">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid w-100" src="../img/novo6.jpg" heigth="100px" alt="Lobby 2">
    </div>
  </div>
  <!-- botões para passsar e voltar o carousel-->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>


    <script src='../js/jquery-3.4.1.min.js'></script>
    <script src='../js/bootstrap.min.js'></script>
</body>
</html>

<?php
  } else{
    header("location: index.php");
    //caso o login esteja incorreto
  }
?>