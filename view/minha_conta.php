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


    <!-- MY ACCOUNT -->
    <div class="my-account-lab">
      <h3 class="mb-3 text-monospace text-center">Minha conta</h3>
    </div>

    <div class="row my-account-display">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Minhas Compras</h5>
            <p class="card-text txt-color-grey">Veja o status da sua compra, devolva ou compre os produtos novamente</p>
            <a href="minhas_compras.php" class="btn btn-teal my-account-btn">Continuar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-home fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Endereços</h5>
            <p class="card-text txt-color-grey">Gerencie seus endereços</p> <br>
            <a href="meus_enderecos.php" class="btn btn-teal my-account-btn">Continuar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-asterisk fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Reembolsos e Boletos</h5>
            <p class="card-text txt-color-grey">Solicitar reembolsos e consultar boletos</p> <br>
            <a href="#" class="btn btn-teal my-account-btn">Continuar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-shield fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Acesso e Segurança</h5>
            <p class="card-text txt-color-grey">Alterar login, senha, nome ou celular</p> <br>
            <a href="editar_dados_usr.php" class="btn btn-teal my-account-btn">Continuar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-credit-card-alt fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Seus Pagamentos</h5>
            <p class="card-text txt-color-grey">Gerenciar cartões e visualizar ofertas</p> <br>
            <a href="#" class="btn btn-teal my-account-btn">Continuar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-gift fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Vale-Presentes</h5>
            <p class="card-text txt-color-grey">Ver saldo ou resgatar um vale-presente</p> <br>
            <a href="#" class="btn btn-teal my-account-btn">Continuar</a>
          </div>
        </div>
      </div>
    </div>

    
    <!-- FOOTER -->
    <?php require "footer.php" ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>