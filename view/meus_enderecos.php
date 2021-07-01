<main>
  <!-- MY ADRESS -->
  <div class="row my-adress-display">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body d-flex justify-content-center">
          <h5 class="card-text my-adress-txt">Adicionar novo endereço</h5>
          <a href="<?= DIRACTION.'endereco/adicionarEndereco';?>" style="color:black;"> <i class="fa fa-plus fa-3x" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
      <?php
        $count = 1;
        foreach($dados as &$i){
          echo '<div class="col-sm-6">';
          echo '<div class="card">';
          echo '<div class="card-body">';
          echo '<i class="fa fa-home fa-3x" aria-hidden="true"></i>';
            echo '<h5 class="card-title">Endereço '.$count.'</h5>';
            echo '<p class="card-text txt-color-grey">'.$i->getNome().' '.$i->getNumero().'</p>';
            echo '<p class="card-text txt-color-grey">'.$i->getComplemento().', '.$i->getBairro().'</p>';
            echo '<p class="card-text txt-color-grey">'.$i->getCidade()->getNome().', '.$i->getCidade()->getEstado()->getSigla().', '.$i->getCep().'</p>';
            echo '<p class="card-text txt-color-grey">'.$i->getPais().'</p>';
            echo '<p class="card-text txt-color-grey">Telefone: '.$i->getTelefone().'</p>';
            echo '<a href="'.DIRACTION.'endereco/editarEndereco/'.$i->getCodigo().'" class="btn btn-teal w-100 mb-2">Editar</a>';
            echo '<a href="'.DIRACTION.'endereco/removerEndereco/'.$i->getCodigo().'" class="btn btn-red w-100">Remover</a>';
          echo '</div>';
          echo '</div>';
          echo '</div>';

          $count++;
        }
      ?>
    </div> 
    
  </main>
