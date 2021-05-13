<!doctype html>
<html lang="en">
  <head>
    <title>Produtos</title>
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
    <ul class="menu">
      <li class="">
        <a class="menuLink" href="index.php">Home</a>
      </li>
      <li> > </li>
      <li>
        <a class="menuLink likAtivo" href="#"> Produtos</a>
      </li>    
    </ul>

    <div class="row" style="margin-top: 50px;">


      <div class="col-sm-1"></div>


      <div class="col-sm-2">
        <div class="row">
          <h6 class = "titulo">Ordenar por:</h6>
        </div>
        <div class="row">
          <div class="form-group">
            <select class="form-control-select select" aria-label="Default select example" name="relevancia" onchange="MostrarProdutosCategoria(this.value)">
              <option selected>Relevância</option>
              <option value="nomeCrescente">Nome [A-Z]</option>
              <option value="nomeDecrescente">Nome [Z-A]</option>
              <option value="precoCrescente">Preço [Maior]</option>
              <option value="precoDecrescente">Preço [Menor]</option>
            </select>
          </div>
        </div>

        <div class="row">
          <h6 class = "titulo" >Filtrar:</h6>
        </div>

        <div class="col-md-10-mb-6 .col-prod filtro">
          <div class="container btn-group">
            <a class="btnSubmit filtro" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Categoria</a>
            <i class="fa fa-plus filtro cor-icone mt-2" aria-hidden="true" data-toggle="collapse" data-target="#multiCollapseExample1" style="cursor: pointer"></i>
          </div>
        </div>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card card-body">
            <div class="form-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input adjust adjust-checkbox-collapse"  name="customCheck" id="customControlInline1">
                <label class="custom-control-label" for="customControlInline1">Fruta Orgânica</label>
              </div>
            </div>
            <div class="form-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input adjust-checkbox-collapse" name="customCheck" id="customControlInline2">
                <label class="custom-control-label" for="defaultCheck">Legume Orgânico</label>
              </div>
            </div>
            <div class="form-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input adjust-checkbox-collapse" name="customCheck" id="customControlInline2">
                <label class="custom-control-label" for="defaultCheck">Ovos Orgânico</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10-mb-6 col-prod filtro">
          <div class="container btn-group">
            <a class="btnSubmit filtro" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Disponibilidade</a>
            <i class="fa fa-plus filtro cor-icone mt-2" aria-hidden="true" data-toggle="collapse" data-target="#multiCollapseExample2" style="cursor: pointer"></i>
          </div>
        </div>
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card card-body">
            <div class="form-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input adjust adjust-checkbox-collapse"  name="customCheck" id="customControlInline1">
                <label class="custom-control-label" for="customControlInline1">Disponível (30)</label>
              </div>
            </div>
            <div class="form-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input adjust-checkbox-collapse" name="customCheck" id="customControlInline2">
                <label class="custom-control-label" for="defaultCheck">Indisponivel (5)</label>
              </div>
            </div>
          </div>
        </div>
      </div>
              
        
      <div class="col-sm-8 card">
        <h3 class="mb-3 offs-label text-monospace mt-2">Todos os produtos</h3>
        <div class="row">
          <div class="container-fluid">
            <div class="produtos d-flex flex-wrap">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top news-img" src="img/itens/laranja.jpg" alt="Livros em promoção"/>
                <div class="card-body">
                  <p class="card-text offs-text-name text-monospace">Laranja Orgânica</p>
                  <h5 class="text-success mb-2"><b>R$ 3,59</b> <small> à vista</small></h5>
                  <button class="btn cor-bg-teal text-white w-100 mb-2">Comprar</button>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <a class="text-decoration-none" href="/frontend/produtos_detalhes.php">
                  <img class="card-img-top news-img" src="img/itens/soja.jpg" alt="Livros em promoção">
                </a>
                  <div class="card-body">
                    <p class="card-text offs-text-name text-monospace">Soja em grãos 500g</p>
                    <h5 class="text-success mb-2"><b>R$ 3,59</b> <small> à vista</small></h5>
                    <button class="btn cor-bg-teal text-white w-100 mb-2">Comprar</button>
                  </div>
                  
                
              </div>
              <div class="card" style="width: 18rem;">
                <img class="card-img-top news-img" src="img/itens/banana-prata.png" alt="Livros em promoção"/>
                <div class="card-body">
                  <p class="card-text offs-text-name text-monospace">Banana da prata 500g</p>
                  <h5 class="text-success mb-2"><b>R$ 3,59</b> <small> à vista</small></h5>
                  <button class="btn cor-bg-teal text-white w-100 mb-2">Comprar</button>
                </div>
              </div> 
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top news-img" src="img/itens/fuba-de-milho.jpg" alt="Livros em promoção"/>
                  <div class="card-body">
                    <p class="card-text offs-text-name text-monospace">Fuba de milho 500g</p>
                    <h5 class="text-success mb-2"><b>R$ 3,59</b> <small> à vista</small></h5>
                    <button class="btn cor-bg-teal text-white w-100 mb-2">Comprar</button>
                  </div>
                </div>
      
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top news-img" src="img/itens/pimentao.webp" alt="Livros em promoção"/>
                  <div class="card-body">
                    <p class="card-text offs-text-name text-monospace">Pimentão Orgânico 500g</p>
                    <h5 class="text-success mb-2"><b>R$ 3,59</b> <small> à vista</small></h5>
                    <button class="btn cor-bg-teal text-white w-100 mb-2">Comprar</button>
                  </div>
                </div>
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top news-img" src="img/itens/tamarindo.jpg" alt="Livros em promoção"/>
                  <div class="card-body">
                    <p class="card-text offs-text-name text-monospace">Tamarindo Orgânico 500g</p>
                    <h5 class="text-success mb-2"><b>R$ 3,59</b> <small> à vista</small></h5>
                    <button class="btn cor-bg-teal text-white w-100 mb-2">Comprar</button>
                  </div>
                </div>
                
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top news-img" src="img/itens/cenoura.png" alt="Livros em promoção"/>
                  <div class="card-body">
                    <p class="card-text offs-text-name text-monospace">Cenoura Orgânico 500g</p>
                    <h5 class="text-success mb-2"><b>R$ 3,59</b> <small> à vista</small></h5>
                    <button class="btn cor-bg-teal text-white w-100 mb-2">Comprar</button>
                  </div>
                </div>

                <div class="card" style="width: 18rem;">
                  <img class="card-img-top news-img" src="img/itens/cravo-da-india-organico.jpg" alt="Livros em promoção">
                  <div class="card-body">
                    <p class="card-text offs-text-name text-monospace">Cravo orgânico 500g</p>
                    <h5 class="text-success mb-2"><b>R$ 3,59</b> <small> à vista</small></h5>
                    <button class="btn cor-bg-teal text-white w-100 mb-2">Comprar</button>
                  </div>
                </div>

                <div class="card" style="width: 18rem;">
                  <img class="card-img-top news-img" src="img/itens/cebola.jpg" alt="Livros em promoção"/>
                  <div class="card-body">
                    <p class="card-text offs-text-name text-monospace">Cebola Orgânica 500g</p>
                    <h5 class="text-success mb-2"><b>R$ 3,59</b> <small> à vista</small></h5>
                    <button class="btn cor-bg-teal text-white w-100 mb-2">Comprar</button>
                  </div>
                </div>
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top news-img" src="img/itens/caqui.jpeg" alt="Livros em promoção"/>
                  <div class="card-body">
                    <p class="card-text offs-text-name text-monospace">Caqui orgânico 500g</p>
                    <h5 class="text-success mb-2"><b>R$ 3,59</b> <small> à vista</small></h5>
                    <button class="btn cor-bg-teal text-white w-100 mb-2">Comprar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="col-sm-1"></div>

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