<?php 

  error_reporting(E_ERROR | E_PARSE);
  $compras = mergeListaPorID($dados, 'ID_COMPRA');

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
            echo   '<small><p>Valor total: R$ '.number_format($pedido['VAL_TOTAL'],2,',','.').'</p></small>';                     
            echo   '<button type="submit" class="btn " style="display: inline; text-decoration: underline" data-toggle="modal" data-target="#myModal'.$idModal.'">';
            echo   'Ver detalhes';
            echo   '</button>';
            echo   '</div>';
            echo   '<div class="col-md-5">';
            echo   '<a href="'.DIRACTION.'compra/avaliar/'.$key.'" class="btn btn-teal my-account-btn w-75">Avaliar compra</a>';
            echo   '<a href="'.DIRACTION.'compra/rastrearCompra/'.$key.'" class="btn btn-teal my-account-btn w-75">Rastrear compra</a>';
            echo   '<a href="#" onclick="comprar_novamente('.$key.')" class="btn btn-teal my-account-btn w-75">Comprar novamente</a>';
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
          echo 'Quantidade: '.$pedido['QUANTIDADE'].'<br>';
          echo 'Preço: R$ ' .number_format($pedido['VAL_TOTAL'],2,',','.');
          echo '</small>';
          echo '</div>';
          echo '</div>';
          echo '<hr/>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        $idModal++; 
      }      
    ?>

  <script src="<?php echo DIRJS.'ajax.js'; ?>"></script>  

</main>