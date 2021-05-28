<!doctype html>
<html lang="en">
  <head>
    <title>Legumes Preciosos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/style.min.css">
  
    <link rel="icon" type="image/png" href="../img/ref_icon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>
    <nav class="navbar navbar-expand-md navbar-static-top navbar-light bg-salmao">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="../index.php">
          <img src="../img/logo.png" alt="logo">
      </a>
    </nav>
    <div class="container">
      <p class="adm-nav-font">Administração - Relatórios</p>
    </div>


    <!-- CONTENT -->
    <div class="row my-account-display">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Tempo Médio Por Setor</h5>
            <p class="card-text txt-color-grey">Veja o status da sua compra, devolva ou compre os produtos novamente</p>
            <a href="" data-toggle="modal" data-target=".adm-rel-1" class="btn btn-teal my-account-btn">Continuar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-location-arrow fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Bairros Mais Atendidos</h5>
            <p class="card-text txt-color-grey">Gerencie seus endereços</p> <br>
            <a href="" data-toggle="modal" data-target=".adm-rel-2" class="btn btn-teal my-account-btn">Continuar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-users fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Clientes Que Mais Compram</h5>
            <p class="card-text txt-color-grey">Solicitar reembolsos e consultar boletos</p> <br>
            <a href="" data-toggle="modal" data-target=".adm-rel-1" class="btn btn-teal my-account-btn">Continuar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-product-hunt fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Produtos Mais Vendidos</h5>
            <p class="card-text txt-color-grey">Solicitar reembolsos e consultar boletos</p> <br>
            <a href="" class="btn btn-teal my-account-btn">Continuar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-th fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Outros</h5>
            <p class="card-text txt-color-grey">Solicitar reembolsos e consultar boletos</p> <br>
            <a href="" class="btn btn-teal my-account-btn">Continuar</a>
          </div>
        </div>
      </div>
    </div>

    <!-- MODALS -->
    <!-- MODAL 1 -->
    <div class="modal fade adm-rel-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <table class="table table-hover adm-modal-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Compras</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Ludmila Brito</td>
                <td>888.777.666-55</td>
                <td>(71) 98888-9999</td>
                <td>55</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Ana Patrícia</td>
                <td>888.777.666-55</td>
                <td>(71) 98888-9999</td>
                <td>32</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Jéssica Rocha</td>
                <td>888.777.666-55</td>
                <td>(71) 98888-9999</td>
                <td>15</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Filipe Silva</td>
                <td>888.777.666-55</td>
                <td>(71) 98888-9999</td>
                <td>2</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- MODAL 2-->
    <div class="modal fade adm-rel-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <table class="table table-hover adm-modal-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Compras</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Pernambués</td>
                <td>Salvador</td>
                <td>BA</td>
                <td>1459</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Imbuí</td>
                <td>Salvador</td>
                <td>BA</td>
                <td>1297</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Barra Funda</td>
                <td>São Paulo</td>
                <td>SP</td>
                <td>1266</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-center text-white">
      <!-- Copyright -->
      <div class="text-center p-3 footer">
        © 2021 Copyright: Legumes Preciosos
        <br>
        Linguagem de Programação III - Jéssica Rocha, Ludmila Brito e Filipe Silva
      </div>
      <!-- Copyright -->
    </footer>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>