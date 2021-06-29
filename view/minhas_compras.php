<?php
  $compras = mergeListaPorID($dados, 'ID_COMPRA');

   foreach($compras as $i){
      key($i);
      echo '<br>';
    }


  /*
   foreach($compras as $i){
    foreach($i as $j){
      echo $j['NOME_PRODUTO'];
      echo '<br>';
    }
  }*/

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
    <?php
      $indicador = 1;
      $idModal = 1;
      foreach($compras as $key => $compra){
          echo  '<div class="container">';
          echo  '<div class="card" style="margin-top: 50px">';
          echo  '<div class="row">';
          echo  '<p class="text-compras text-color text-monospace">Compra Nº'.$key.'</p>';
          echo  '</div>';
          
            echo  '<div class="card-body">';
            echo  '<div class="row align-compras">';
            echo  '<div class="col-md-2">';
            echo  '<div id="carouselIndicators'.$indicador.'" class="carousel slide" data-ride="carousel">';
            echo  '<ol class="carousel-indicators">';
            echo  '<li data-target="#carouselIndicators'.$indicador.'" data-slide-to="0" class="active"></li>';
            echo  '<li data-target="#carouselIndicators'.$indicador.'" data-slide-to="1"></li>';
            echo   '<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>';
            echo   '</ol>';
            echo   '<div class="carousel-inner">';
            $indice = 1;
            foreach($compra as $pedido){
              if($indice == 1){
                echo   '<div class="carousel-item active">';
              }
              else{
                echo   '<div class="carousel-item">';
              }
              echo   '<img src="'.DIRIMG.'itens/'.$pedido['IMAGEM_PRODUTO'].'" class="d-block w-100" alt="...">';
              echo   '</div>';            
              $indice++;
            }
            echo   '</div>';
            echo   '<a class="carousel-control-prev" href="#carouselIndicators'.$indicador.'" role="button" data-slide="prev">';
            echo   '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
            echo   '<span class="sr-only">Previous</span>';
            echo   '</a>';
            echo   '<a class="carousel-control-next" href="#carouselIndicators'.$indicador.'" role="button" data-slide="next">';
            echo   '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
            echo   '<span class="sr-only">Next</span>';
            echo   '</a>';
            echo   '</div>';
            echo   '</div>';
            echo   '<div class="col-md-5">';
            echo   '<small class="text-compras"><p>Resumo da compra:</p></small>';
            echo   '<small><p>Compra: '.$key.'</p></small>';
            echo   '<small><p>Data do compra: '.$pedido["DATA"].'</p></small>';
            echo   '<small><p>Valor total: </p></small>';                     
            echo   '<button type="submit" class="btn " style="display: inline; text-decoration: underline" data-toggle="modal" data-target="#myModal'.$idModal.'">';
            echo   'Ver detalhes';
            echo   '</button>';
            echo   '</div>';
            echo   '<div class="col-md-5">';
            echo   '<a href='.DIRACTION.'compra/avaliar class="btn btn-teal my-account-btn w-75">Avaliar compra</a>';
            echo   '<a href='.DIRACTION.'compra/rastrear class="btn btn-teal my-account-btn w-75">Rastrear compra</a>';
            echo   '<a href="#" class="btn btn-teal my-account-btn w-75">Comprar novamente</a>';
            echo   '</div>';
            echo   '</div>';
            echo   '</div>';
          echo   '</div>'; 
          echo ' </div>';
          $indicador++;
          $idModal++;
      }
      $idModal = 1;
      foreach($compras as $key => $compra){
        
          /* The Modal */
          echo '<div>';
          echo '<div class="modal fade" id="myModal'.$idModal.'">';
          echo  '<div class="modal-dialog modal-xl">';
          echo    '<div class="modal-content">';
                    /* Modal Header */
          echo     '<div class="modal-header">';
          echo        '<h4 class="offs-label text-monospace text-center">Resumo da compra</h4>';
          echo        '<button type="button" class="close" data-dismiss="modal">&times;</button>';
          echo      '</div>';
          echo '<div class="modal-body">';
          /* Modal body */
          foreach($compra as $pedido){
          echo '<div class="row" style="margin-top: 20px;">';
          echo '<div class="col-md-5">';
          echo '<img class="card-img-top" src="'.DIRIMG.'itens/'.$pedido['IMAGEM_PRODUTO'].'" alt="" style="width:130px">';
          echo '</div>';
          echo '<div class="col-md-7">';
          echo '<h6 class="offs-label">'.$pedido['NOME_PRODUTO'].'</h6>';
          echo '<small style="line-height: 10px;">';
          echo 'Receba até 20 de maio<br>';
          echo 'Qtd:'.$pedido['QUANTIDADE'].'<br>';
          echo 'Preço:' .$pedido['PRECO_PRODUTO'];
          echo '</small>';
          }
          echo '</div>';
          echo '</div>';   
        $idModal++; 
      }      
        echo '</div> <hr>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    ?>
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
                    <button type="submit" class="btn " style="display: inline; text-decoration: underline" data-toggle="modal" data-target="#myModal">
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
              <div class="modal-body">
                <?php 
                  foreach($dados as &$item){
                    echo '<div class="row" style="margin-top: 20px;">';
                    echo '<div class="col-md-5">';
                    echo '<img class="card-img-top" src="'.DIRIMG.'itens/acucar-mascavo-organico.jpg" alt="" style="width:130px">';
                    echo '</div>';
                    echo '<div class="col-md-7">';
                    echo '<h6 class="offs-label">'.'nome_produto'.'</h6>';
                    echo '<small style="line-height: 10px;">';
                    echo 'Receba até 20 de maio<br>';
                    echo 'Qtd:'.'quantidade_produto'.'<br>';
                    echo 'preco_produto'; #$item["PRECO_PRODUTO"];
                    echo '</small>';
                    echo '</div>';
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