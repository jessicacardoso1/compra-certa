<main>
    <!--MENU FIXO-->
    <div class="container" style="margin-left: 15%;">
      <ul class="menu">
        <li class="">
          <a class="menuLink" href="<?php echo DIRACTION.'cliente/minhaConta';?>">Minha conta</a>
        </li>
        <li> > </li>
        <li>
          <a class="menuLink" href="<?php echo DIRACTION.'cliente/minhascompras';?>">Minha compras</a>
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
        <p class="text-center"><b>Pedido:</b> <?=$dados[0]->getCodigo();?></p>
        <p class="text-center"><b>Nota Fiscal:</b> 5667</p>
      </div>
      <?php
      $statusPedido = ['disabled','disabled','disabled','disabled'];
      for ($i=0; $i < $dados[0]->getSetor(); $i++)
          $statusPedido[$i] = 'complete';
      $statusPedido[$dados[0]->getSetor()-1] = 'active';    
      ?>
      
      <div class="col-sm-6 mt-2">
        <div class="row bs-wizard">
          <div class="col-xs-3 bs-wizard-step <?=$statusPedido[0];?>">
            <div class="text-center bs-wizard-stepnum">Preparação</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center mr-5">O pedido está sendo preparado.</div>
          </div>
            
          <div class="col-xs-3 bs-wizard-step <?=$statusPedido[1];?>">
            <div class="text-center bs-wizard-stepnum">Conferência e Embalagem</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center mr-5">O pedido está sendo conferido e embalado.</div>
          </div>
            
          <div class="col-xs-3 bs-wizard-step <?=$statusPedido[2];?>">
            <div class="text-center bs-wizard-stepnum">Entrega</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center">O pedido saiu para a entrega.</div>
          </div>

          <div class="col-xs-3 bs-wizard-step <?=$statusPedido[3];?>">
            <div class="text-center bs-wizard-stepnum">Concluido</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center mr-5">O pedido foi entregue.</div>
          </div>
        </div>
      </div>

      <div class="col-sm-2"></div>

    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     </body>
</main>