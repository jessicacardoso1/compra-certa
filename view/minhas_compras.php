<?php 
$dados = $dados[0];
var_dump($dados);
?>

<main>
    <!--MENU FIXO-->
    <div class="container" style="margin-left: 15%;">
      <ul class="menu">
        <li class="">
          <a class="menuLink" href="<?php echo DIRACTION.'cliente/minhaConta';?>">Minha conta</a>
        </li>
        <li> > </li>
        <li>
          <a class="menuLink likAtivo" href="#"> Minhas compras</a>
        </li>    
      </ul>
    </div>
    <!--compra -->
    <div class="container">
      <div class="card" style="margin-top: 50px">
          <div class="row">
              <p class="text-compras text-color text-monospace">Compra Nº 0052</p>
          </div>
          <div class="card-body">
              <div class="row align-compras">
                  <div class="col-md-2">
                      <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="img/itens/cenoura.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/itens/cebola.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/itens/repolho.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                  </div>
                  <div class="col-md-5">
                    <small class="text-compras"><p>Resumo da compra:</p></small>
                    <small><p>Compra: <?php echo $dados["ID_COMPRA"]?></p></small>
                    <small><p>Data do compra: <?php echo $dados["DATA"]?></p></small>
                    <small><p>Valor total: R$ 40,88</p></small>                     
                    <button type="button" class="btn " style="display: inline; text-decoration: underline" data-toggle="modal" data-target="#myModal">
                      Ver detalhes
                      </button>

                  </div>
                  <div class="col-md-5">
                    <a href=<?php echo DIRACTION.'compra/avaliar'?> class="btn btn-teal my-account-btn w-75">Avaliar compra</a>
                    <a href=<?php echo DIRACTION.'compra/rastrear'?> class="btn btn-teal my-account-btn w-75">Rastrear compra</a>
                    <a href="#" class="btn btn-teal my-account-btn w-75">Comprar novamente</a>
                  </div>
              </div>
          </div>
        </div>
      
  </div>
    <!-- The Modal -->
    <div>
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="offs-label text-monospace text-center">Resumo da compra</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
              <!-- Modal body -->
              <div class="row" style="margin-top: 20px;">
                <?php 
                  foreach($dados as &$item){
                    echo '<div class="col-md-5">';
                    echo '<img class="card-img-top" src="'.DIRIMG.'/itens'.$item["IMAGEM_PRODUTO"].'" alt="'.$item["IMAGEM_PRODUTO"].'" style="width:130px">';
                    echo '</div>';
                    echo '<div class="col-md-7">';
                    echo '<h6 class="offs-label">'.$item["NOME_PRODUTO"].'</h6>';
                    echo '<small style="line-height: 10px;">';
                    echo     'Receba até 20 de maio<br>';
                    echo     'Qtd:'.$item["QUANTIDADE"].'<br>';
                    echo     '.$item["PRECO_PRODUTO"]';
                    echo '</small>';
                    echo '</div>';
                  } 
                ?>
            </div> <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>