<?php

  # 3 -> setor entrega - envio
  # 4 -> setor entrega - em andamento
  # 5 -> setor entrega - entregue

  $check = false;
  if($dados != []){
    $dados_compras = $dados;
    
    foreach($dados_compras as $i){
      $i = $i[0];

      if($i->getSetor() == 3){
        $compras_envio[] = $i;
      }
      elseif($i->getSetor() == 4){
        $compras_em_andamento[] = $i;
      }
      elseif($i->getSetor() == 5){
        $compras_entregues[] = $i;
      }
    }

    $dados_compras = array_merge($compras_envio, $compras_em_andamento, $compras_entregues);

    $check = true;
  }

?>

<main>
  <nav class="navbar bg-salmao">
    <div class="container justify-content-between">
      <a href="<?php echo DIRPAGE; ?>">
        <img src="<?php echo DIRIMG.'logo.png'; ?>" alt="logo" width="210">
      </a>
      
      <a href="<?php echo DIRACTION.'login/logout'; ?>" class="text-white text-decoration-none">
        <strong>Sair</strong>
        <i class="fa fa-sign-out fa-lg ml-2 fa-2x"></i>
      </a>
    </div>
  </nav>

  <div class="container mt-5">
    <h3 class="mb-3 offs-label text-monospace text-center">Acompanhe o andamento das compras:</h3>
  </div>

  <!-- Rastrear -->
  <?php $background = 0 ?>
  <?php foreach($dados_compras as $i): ?>
    <?php if($background % 2 == 0): ?>
      <div class="row cor-bg-teal-light">
    <?php else: ?>
      <div class="row">
    <?php endif ?>

      <?php
        if($i->getSetor() == 3){
          $status = ['active', 'disabled', 'disabled'];
        }
        elseif($i->getSetor() == 4){
          $status = ['complete', 'active', 'disabled'];
        }
        elseif($i->getSetor() == 5){
          $status = ['complete', 'complete', 'active'];
        }
      ?>

      <div class="col-sm-2"></div>

      <div class="col-sm-4 mt-5">
        <p class="card-text offs-text-name text-monospace">Legumes Preciosos - TRACKING</p>
        <p class="text-center"><b>Pedido:</b> <?= $i->getCodigo() ?></p>
        <p class="text-center"><b>Nota Fiscal:</b> <?= '#'.rand(1000000, 10000000) ?></p>
      </div>

      <div class="col-sm-6 mt-2">
        <div class="row bs-wizard">
          <div class="col-xs-3 bs-wizard-step <?= $status[0] ?>">
            <div class="text-center bs-wizard-stepnum">Pedido conferido</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center mr-5">O pedido irá ser enviado.</div>
          </div>

          <div class="col-xs-3 bs-wizard-step <?= $status[1] ?>">
            <div class="text-center bs-wizard-stepnum">Em andamento</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center mr-5">O pedido está em andamento.</div>
          </div>
            
          <div class="col-xs-3 bs-wizard-step <?= $status[2] ?>"><!-- complete -->
            <div class="text-center bs-wizard-stepnum">Entregue</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center mr-5">O pedido foi entregue.</div>
          </div>
            
        </div>
      </div>

      <div class="col-sm-2"></div>

    </div>
  <?php $background++ ?>
  <?php endforeach ?>

</main>
