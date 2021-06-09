<?php

  $nome_promocao = $dados[0]['NOME_PROMOCAO'];

?>
<main>
  <!--Carousel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner text-center">
      <div class="carousel-item active">
        <img class="img-fluid mt-0 w-75" src="img/banners/dino-kale-1920x420-darker.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="img-fluid mt-0 w-75" src="img/banners/campo.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="img-fluid mt-0 w-75" src="img/banners/header-pigs_cattle_1920x420_1_.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="img-fluid mt-0 w-75" src="img/banners/vegano.jpg" alt="slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    <div class="container offs-container">
      <div class="row">
          <div class="col-8">
              <?php
                echo '<h3 class="mb-3 offs-label text-monospace">'.$nome_promocao.': Confira a nossa promoção!</h3>';
              ?>
          </div>
          <div class="col-4 text-right">
              <a class="btn btn-primary mb-3 mr-1 btn-success" href="#carouselExampleIndicators2" role="button"  data-slide="prev">
                  <i class="carousel-control-prev-icon"></i>
              </a>
              <a class="btn btn-primary mb-3 btn-success" href="#carouselExampleIndicators2" role="button" data-slide="next">
                  <i class="carousel-control-next-icon"></i>
              </a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php
                      $carousel_others = '<div class="carousel-item">';
                      $row = '<div class="row">';
                      
                      echo '<div class="carousel-item active">';
                      echo $row;
                      exibirItens($dados[0]);
                      exibirItens($dados[1]);
                      exibirItens($dados[2]);
                      echo '</div>';
                      echo '</div>';

                      echo $carousel_others;
                      echo $row;
                      exibirItens($dados[3]);
                      exibirItens($dados[4]);
                      exibirItens($dados[5]);
                      echo '</div>';
                      echo '</div>';

                      echo $carousel_others;
                      echo $row;
                      exibirItens($dados[6]);
                      exibirItens($dados[7]);
                      exibirItens($dados[8]);
                      echo '</div>';
                      echo '</div>';

                      function exibirItens($c){
                        echo '<div class="col-md-4 mb-3">';
                        echo '<div class="card offs-card-size">';
                        #echo '<a href="'.DIRACTION.'produto/detalhes/'.$c['ID_PRODUTO'].'">';
                        echo '<img class="img-fluid offs-img-size" src="'.DIRIMG.'itens/'.$c['IMG'].'">';
                        #echo '</a>';
                        echo '<div class="card-body">';
                        echo '<div class="form-group">';
                        echo '<p class="card-text offs-text-name text-monospace">'.$c['NOME_PRODUTO'].'</p>';
                        echo '<div class="card-text text-muted"><s>De: R$ '.$c['PRECO'].'</s> por:</div>';
                        echo '<h5 class="text-success mb-2"><b>R$ '.$c['PRECO_NOVO_PRODUTO'].'</b><small> à vista</small></h5>';
                        echo '<button class="btn cor-bg-teal  text-white w-100 mb-2">Comprar</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                      }
                    ?>
              </div>
          </div>
      </div>
  </div>


  <!--CARD-PRODUTOS-->
  <div class="container offs-container">
  <div class="row justify-content-center" style=" margin-top: 110px; color: rgb(121, 121, 121);">
    <h3 class="mb-3 offs-label text-monospace">Produtos mais vendidos:</h3>
  </div>
  <div class="container-fluid">
    <div class="produtos d-flex flex-wrap">
      <div class="card mais-vendidos-card-size">
            <img class="card-img-top mais-vendidos-img-size" src="img/itens/batata.jpg" alt="Livros em promoção">
            <div class="card-body">
              <p class="card-text offs-text-name text-monospace">Batatas</p>
              <h5 class="text-success mb-2"><b>R$ 8,99</b> <small> à vista</small></h5>
              <div class="btn-group" role="group" aria-label="Exemplo básico">
                <button type="button" class="btn cor-bg-teal text-white w-100 mb-2 mr-2">Comprar</button>
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos1', 'sub');">-</button>
                <input id="btnMaisVendidos1" type="number" class="form-control text-center w-25" value="1">
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos1', 'sum');">+</button>
              </div>
            </div>
        </div>

        <div class="card mais-vendidos-card-size">
          <img class="card-img-top mais-vendidos-img-size" src="img/itens/batata.jpg" alt="Livros em promoção">
          <div class="card-body">
              <p class="card-text offs-text-name text-monospace">Batatas</p>
              <h5 class="text-success mb-2"><b>R$ 8,99</b> <small> à vista</small></h5>
              <div class="btn-group" role="group" aria-label="Exemplo básico">
                <button type="button" class="btn cor-bg-teal text-white w-100 mb-2 mr-2">Comprar</button>
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos2', 'sub');">-</button>
                <input id="btnMaisVendidos2" type="number" class="form-control text-center w-25" value="1">
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos2', 'sum');">+</button>
              </div>
          </div>
        </div>

        <div class="card mais-vendidos-card-size">
          <img class="card-img-top mais-vendidos-img-size" src="img/itens/batata.jpg" alt="Livros em promoção">
          <div class="card-body">
            <p class="card-text offs-text-name text-monospace">Batatas</p>
            <h5 class="text-success mb-2"><b>R$ 8,99</b> <small> à vista</small></h5>
            <div class="btn-group" role="group" aria-label="Exemplo básico">
              <button type="button" class="btn cor-bg-teal text-white w-100 mb-2 mr-2">Comprar</button>
              <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos3', 'sub');">-</button>
              <input id="btnMaisVendidos3" type="number" class="form-control text-center w-25" value="1">
              <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos3', 'sum');">+</button>
            </div>
          </div>
        </div>

        <div class="card mais-vendidos-card-size">
            <img class="card-img-top mais-vendidos-img-size" src="img/itens/cebola.jpg" alt="Livros em promoção">
            <div class="card-body">
              <p class="card-text offs-text-name text-monospace">Cebolas</p>
              <h5 class="text-success mb-2"><b>R$ 9,99</b> <small> à vista</small></h5>
              <div class="btn-group" role="group" aria-label="Exemplo básico">
                <button type="button" class="btn cor-bg-teal text-white w-100 mb-2 mr-2">Comprar</button>
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos4', 'sub');">-</button>
                <input id="btnMaisVendidos4" type="number" class="form-control text-center w-25" value="1">
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos4', 'sum');">+</button>
              </div>
            </div>
        </div>

        <div class="card mais-vendidos-card-size">
            <img class="card-img-top mais-vendidos-img-size" src="img/itens/caqui.jpeg" alt="Livros em promoção">
            <div class="card-body">
              <p class="card-text offs-text-name text-monospace">Caqui</p>
              <h5 class="text-success mb-2"><b>R$ 18,99</b> <small> à vista</small></h5>
              <div class="btn-group" role="group" aria-label="Exemplo básico">
                  <button type="button" class="btn cor-bg-teal text-white w-100 mb-2 mr-2">Comprar</button>
                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos5', 'sub');">-</button>
                  <input id="btnMaisVendidos5" type="number" class="form-control text-center w-25" value="1">
                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos5', 'sum');">+</button>
                </div>
            </div>
        </div>

        <div class="card mais-vendidos-card-size">
          <img class="card-img-top mais-vendidos-img-size" src="img/itens/caqui.jpeg" alt="Livros em promoção">
          <div class="card-body">
            <p class="card-text offs-text-name text-monospace">Caqui</p>
            <h5 class="text-success mb-2"><b>R$ 18,99</b> <small> à vista</small></h5>
            <div class="btn-group" role="group" aria-label="Exemplo básico">
                <button type="button" class="btn cor-bg-teal text-white w-100 mb-2 mr-2">Comprar</button>
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos6', 'sub');">-</button>
                <input id="btnMaisVendidos6" type="number" class="form-control text-center w-25" value="1">
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos6', 'sum');">+</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!--CARD DE NOVIDADES-->

    <div class="row justify-content-around" style=" margin-left: auto; margin-top: 110px; color: rgb(121, 121, 121);">
      <h3 class="mb-3 offs-label text-monospace">Novidades que chegaram para você:</h3>
    </div>
    <div class="container-fluid">
      <div class="produtos d-flex">
        <div class="card" style="width: 18rem;">
            <a href="produtos_detalhes.php">
              <img class="card-img-top news-img"src="img/itens/soja.jpg" alt="Livros em promoção">
            </a>
              <div class="card-body">
                <p class="card-text offs-text-name text-monospace">Soja em grãos 500g</p>
                <h5 class="text-success mb-2"><b>R$ 18,99</b> <small> à vista</small></h5>
                <button type="button" class="btn cor-bg-teal text-white w-100">Comprar</button>             
              </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img class="card-img-top news-img" src="img/itens/aveia.jpg" alt="Livros em promoção"
            >
            <div class="card-body">
                <p class="card-text offs-text-name text-monospace">Aveia em flocos 500g</p>
                <h5 class="text-success mb-2"><b>R$ 8,89</b> <small> à vista</small></h5>
                <button type="button" class="btn cor-bg-teal text-white w-100">Comprar</button>             
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img class="card-img-top news-img" src="img/itens/feijao.jpg" alt="Livros em promoção"/>
            <div class="card-body">
              <p class="card-text offs-text-name text-monospace">Feijão carioca 500g</p>
              <h5 class="text-success mb-2"><b>R$ 6,39</b> <small> à vista</small></h5>
              <button type="button" class="btn cor-bg-teal text-white w-100">Comprar</button>             
            </div>
          </div>

          <div class="card" style="width: 18rem;">
              <img class="card-img-top news-img" src="img/itens/quinoa.jpg" alt="Livros em promoção" />
              <div class="card-body">
                <p class="card-text offs-text-name text-monospace">Quinoa 500g</p>
                <h5 class="text-success mb-2"><b>R$ 5,89</b> <small> à vista</small></h5>
                <button type="button" class="btn cor-bg-teal text-white w-100">Comprar</button>                               
              </div>
          </div>

          <div class="card" style="width: 18rem;">
              <img class="card-img-top news-img" src="img/itens/tapioca.jpg" alt="Livros em promoção"/>
              <div class="card-body">
                <p class="card-text offs-text-name text-monospace">Tapioca 500g</p>
                <h5 class="text-success mb-2"><b>R$ 3,59</b> <small> à vista</small></h5>
                <button type="button" class="btn cor-bg-teal text-white w-100">Comprar</button>             
              </div>
          </div>
          </div>
      </div>
    
    <script src="js/index.js"></script>
    
</main>