<?php

  $check = false;
  if($dados != []){
    $compra['id_compra'] = key($dados);

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

  <div class="container">
    <h3 class="offs-label text-monospace text-center mb-3 mt-3">Conferência e Embalagem</h3>
  </div>

  <!-- CONTENT -->
  <div class="row adm-conf-emb-display">
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body d-flex justify-content-center">
          <?php if($check): ?>
            <h5 class="card-text my-adress-txt">Pedido Nº <?= $compra['id_compra'] ?></h5>
          <?php else: ?>
            <h5 class="card-text my-adress-txt">Não há compras a serem processadas...</h5>
          <?php endif ?>
        </div>
        <?php if($check): ?>
          <ul class="list-group">
            <?php foreach($dados as $i): ?>
            <li class="list-group-item">
              <?= $i[0] ?>
              <span class="badge badge-primary badge-pill adm-conf-emb-span"><?= $i[1] ?></span>
            </li>
          </ul>
          <?php endforeach ?>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <form method="POST" action="<?= DIRACTION.'funcionario-conferencia-embalagem/retornarParaPreparacao' ?>">
              <input type="hidden" name="num_compra" value="<?= $compra['id_compra'] ?>"/>
              <input type="submit" class="btn btn-success adm-conf-emb-btn" value="Voltar Para Preparação" />
            </form>
          </div>
          <div class="col-sm-6">
            <form method="POST" action="<?= DIRACTION.'funcionario-conferencia-embalagem/enviarParaEntrega' ?>">
              <input type="hidden" name="num_compra" value="<?= $compra['id_compra'] ?>"/>
              <input type="submit" class="btn btn-success adm-conf-emb-btn" value="Entrega" />
            </form>
          </div>
        <?php endif ?>
      </div>
    </div>
  </div>
</main>
