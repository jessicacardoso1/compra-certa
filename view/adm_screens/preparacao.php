<?php

  $primeira_compra_realizada = current($dados);
  $numero_primeira_compra_realizada = array_keys($primeira_compra_realizada)[0];
  
  $outras_compras = array_slice($dados, 1);

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
    <h3 class="offs-label text-monospace text-center mb-3 mt-3">Preparação</h3>
  </div>
  
  <!-- CONTENT -->
  <div class="container adm-preparation-container">
    <div class="row">
      <div class="col-lg-3">
        <div class="card adm-preparation-card">
          <div class="card-header pad-bottom">
            <p class="text-center adm-preparation-font">Pedidos</p>
          </div>
          <ul class="list-group list-group-flush">
            <?php

              $indice_modal = 1;
              foreach($outras_compras as $i){
                echo '<li class="list-group-item">Pedido #'.array_keys($i)[0].'';
                echo '<button type="button" class="btn adm-preparation-search-icon" data-toggle="modal" data-target="#modal_'.$indice_modal.'">';
                echo '<i class="fa fa-search-plus fa-1x adm-preparation-search-icon" aria-hidden="true"></i>';
                echo '</button>';
                echo '</li>';

                $indice_modal++;
              }

            ?>
            
          <!-- Modal PEDIDO -->
          <?php

            $indice_modal = 1;
            foreach($outras_compras as $i){
              echo '<div class="modal fade" id="modal_'.$indice_modal.'" tabindex="-1" role="dialog" aria-labelledby="modal_'.$indice_modal.'" aria-hidden="true">';
              echo '<div class="modal-dialog" role="document">';
              echo '<div class="modal-content">';
              echo '<div class="modal-header">';
              echo '<h5 class="modal-title" id="modal_'.$indice_modal.'">Pedido # '.array_keys($i)[0].' </h5>';
              echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
              echo '<span aria-hidden="true">&times;</span>';
              echo '</button>';
              echo '</div>';
              echo '<div class="modal-body">';
              echo '<ul class="list-group">';
              foreach($i as $j){
                echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                echo $j[0];
                echo '<span class="badge badge-primary badge-pill">'.$j[1].'</span>';
                echo '</li>';
              }
              echo '</ul>';
              echo '</div>';
              echo '<div class="modal-footer">';
              echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';

              $indice_modal++;
            }
          ?>
          </ul>
        </div>
      </div>

      <!-- CARD PEDIDO -->
      <div class="col-lg-9">
        <div class="card">
          <h5 class="card-header adm-preparation-card adm-preparation-font">Pedido #<?php echo $numero_primeira_compra_realizada; ?></h5>
          <div class="card-body">
            <h5 class="card-title">Itens:</h5>
            <ul class="list-group">
              <?php

                foreach($primeira_compra_realizada as $i){
                  echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                  echo $i[0];
                  echo '<span class="badge badge-primary badge-pill">'.$i[1].'</span>';
                }

              ?>
            </ul>
            <form method="POST" action="<?php echo DIRACTION.'funcionario-preparacao/enviarParaEmbalagem'; ?>">
              <input type="hidden" name="num_compra" value="<?php echo $numero_primeira_compra_realizada ?>"/>
              <input type="submit" class="btn btn-success adm-preparation-btn" value="Conf. e Embalagem" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
