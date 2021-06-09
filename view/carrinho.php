<main>
  <div class="container border pt-3 my-3" style="margin-top: 70px; color:rgb(71, 70, 70); padding: 30px;">
      <div class="row">
        <div class="col-10">
          <h3 class="mb-3 offs-label text-monospace">Carrinho de compras</h3>
        </div>
        <div class="col-md-2 text-center">
          <small>Preço</small>
        </div>
      </div>

      <!-- PRODUTOS CARRINHO -->
      <?php
          $itens = $dados[0];
          
          foreach($itens as $i){
            echo '<div class="row">';
            echo '<div class="col-md-1">';
            echo '<div class="form-check aling_vert">';
            echo '<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">';
            echo '</div>';
            echo '</div>';
            
            echo '<div class="col-md-2">';
            echo '<img class="img-fluid img-thumbnail" src="'.DIRIMG.'itens/'.$i->getProduto()->getImg().'" alt="Produtos" width="200">';
            echo '</div>';

            echo '<div class="col-md-7">';
            echo '<h5>'.$i->getProduto()->getNome().'</h5>';
            echo '<p>Em estoque</p>';
            echo '<small>Contagem de unidades: '.$i->getQuantidade().'</small><br>';
            
            echo '<div class="row">';
            echo '<div class="col-sm-7">';
            echo '<a href="'.DIRACTION.'carrinho/excluirItem/'.$i->getProduto()->getCodigo().'" class="text-dark"><small>Excluir</small></a>';
            echo '<a class="text-decoration-none text-dark ml-1 mr-1"><small>|</small></a>';
            echo '<a href="" class="text-dark"><small>Salvar para mais tarde</small></a>';
            echo '</div>';
            echo '<div class="col-sm-5"></div>';
            echo '</div>';
            echo '</div>';
            echo '<div class="col-md-2" >';
            echo '<p class="text-center">R$ '.number_format($i->subTotal(),2,',','.').'</p>';
            echo '</div>';
            echo '</div> <hr>';
          }
      ?>

      <div class="row mt-3">
        <div class="col-sm-4"></div>
        
        <div class="col-sm-4">
          <button onclick=location.href="finalizar_compra.php" type="button" class="btn cor-bg-teal text-white mt-2 w-100">Finalizar compra</button>
        </div>

        <div class="col-sm-4">
          <h5 class=" ml-5 mt-2">Valor Total: R$ <?php echo number_format($dados[1],2,',','.'); ?></h3>
        </div>
      </div>

    </div>
    <!--salvos/comprar novamente-->

    <div class="container border pt-3 my-3" style="margin-top: 70px; color:rgb(71, 70, 70); padding: 30px;">

      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home">Salvos para mais tarde</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu1">Comprar novamente</a>
        </li>
      </ul>
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane container active" id="home">

          <div class="row" style="margin-top: 20px;">
            <div class="col-md-2">
                <img class="img-fluid img-thumbnail" src="<?php echo DIRIMG.'itens/castanha-do-brasil-media-organica.jpg'; ?>" alt="produto">   
            </div>
            <div class="col-md-8">
              <h5>Castanha do Brasil média 250g</h5>
              <p>Em estoque</p>
              <a href="" class="text-dark"><small>Excluir</small></a>
              <a class="text-decoration-none text-dark ml-1 mr-1"><small>|</small></a>
              <a href="" class="text-dark"><small>Salvar para mais tarde</small></a> <br>
              <button type="button" class="btn cor-bg-teal text-white mt-2">Adicionar ao carrinho</button>
            </div>

            <div class="col-md-2">
              <p style="margin-left: 55px;">R$ 24,90</p>
            </div>
                
          </div> <hr>

          <!--produto dois salvos-->
          <div class="row" style="margin-top: 20px;">
            <div class="col-md-2">
                <img class="img-fluid img-thumbnail" src="<?php echo DIRIMG.'itens/cebola.jpg'; ?>" alt="produto">   
            </div>

            <div class="col-md-8">
              <h5>Cebola</h5>
              <p>Em estoque</p>
              <a href="" class="text-dark"><small>Excluir</small></a>
              <a class="text-decoration-none text-dark ml-1 mr-1"><small>|</small></a>
              <a href="" class="text-dark"><small>Salvar para mais tarde</small></a> <br>
              <button type="button" class="btn cor-bg-teal text-white mt-2">Adicionar ao carrinho</button>
            </div>

            <div class="col-md-2">
              <p class="text-center">R$ 7,90</p>
            </div>
                
          </div> 
         <!--comprar novamente--> 
          

        </div>
        <div class="tab-pane container fade" id="menu1">

          <div class="row" style="margin-top: 20px;">
            <div class="col-md-2">
                <img class="img-fluid img-thumbnail" src="<?php echo DIRIMG.'itens/castanha-do-brasil-media-organica.jpg'; ?>" alt="Livros em promoção">   
            </div>

            <div class="col-md-8">
              <h5>Castanha do Brasil média 250g</h5>
              <p>Em estoque</p>
              <a href="" class="text-dark"><small>Excluir</small></a>
              <a class="text-decoration-none text-dark ml-1 mr-1"><small>|</small></a>
              <a href="" class="text-dark"><small>Salvar para mais tarde</small></a> <br>
              <button type="button" class="btn cor-bg-teal text-white mt-2">Comprar novamente</button>
            </div>
            

            <div class="col-md-2">
              <p class="text-center">R$ 24,90</p>
            </div>
                
          </div> <hr>

          <!--produto dois comprar novamente-->

          <div class="row" style="margin-top: 20px;">
            <div class="col-md-2">
                <img class="img-fluid img-thumbnail" src="<?php echo DIRIMG.'itens/feijao-preto-organico.jpg'; ?>" alt="Livros em promoção">   
            </div>
            <div class="col-md-8">
              <h5>Feijão Preto</h5>
              <p>Em estoque</p>
              <a href="" class="text-dark"><small>Excluir</small></a>
              <a class="text-decoration-none text-dark ml-1 mr-1"><small>|</small></a>
              <a href="" class="text-dark"><small>Salvar para mais tarde</small></a> <br>
              <button type="button" class="btn cor-bg-teal text-white mt-2">Comprar novamente</button>
            </div>

            <div class="col-md-2">
              <p class="text-center">R$ 4,90</p>
            </div>
                
          </div>
          
        </div>
        
      </div>

    </div>
</main>