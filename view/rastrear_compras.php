<!doctype html>
<html lang="en">
  <head>
    <title>Legumes Preciosos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.min.css">
  
    <link rel="icon" type="image/png" href="img/ref_icon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>
    <?php require "navbar.php"; ?>

    <!--MENU FIXO-->
    <div class="container" style="margin-left: 15%;">
      <ul class="menu">
        <li class="">
          <a class="menuLink" href="minha_conta.php">Minha conta</a>
        </li>
        <li> > </li>
        <li>
          <a class="menuLink" href="minhas_compras.php"> Minha compras</a>
        </li>  
        <li> > </li>
        <li>
          <a class="menuLink likAtivo" href="#"> Rastrear compras</a>
        </li>    
      </ul>
    </div>

    <div class="container mt-5">
      <h3 class="mb-3 offs-label text-monospace text-center">Sua compra foi para Conferência e Embalagem!</h3>
    </div>

    <!-- Rastrear 1 -->
    <div class="row cor-bg-teal-light mt-5">

      <div class="col-sm-1"></div>

      <div class="col-sm-3 mt-5">
        <p class="card-text offs-text-name text-monospace">Legumes Preciosos - TRACKING</p>
        <p class="text-center"><b>Pedido:</b> #15877</p>
        <p class="text-center"><b>Nota Fiscal:</b> 5667</p>
      </div>

      <div class="col-sm-6 mt-2">
        <div class="row bs-wizard">
          <div class="col-xs-3 bs-wizard-step complete">
            <div class="text-center bs-wizard-stepnum">Pedido realizado</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center mr-5">O pedido foi realizado.</div>
          </div>

          <div class="col-xs-3 bs-wizard-step complete">
            <div class="text-center bs-wizard-stepnum">Preparação</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center mr-5">O pedido está sendo preparado.</div>
          </div>
            
          <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
            <div class="text-center bs-wizard-stepnum">Conferência e Embalagem</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center mr-5">O pedido está sendo conferido e embalado.</div>
          </div>
            
          <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
            <div class="text-center bs-wizard-stepnum">Entrega</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center">O pedido saiu para a entrega.</div>
          </div>
        </div>
      </div>

      <div class="col-sm-2"></div>

    </div>
    

    <!-- FOOTER -->
    <?php require "footer.php" ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/index.js"></script>
    <script src="jquerry.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>