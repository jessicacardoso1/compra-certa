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
    
    <?php $count = 1 ?>
    <?php foreach($dados as &$i){ ?>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-home fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Endereço <?= $count ?></h5>
            <p class="card-text txt-color-grey"><?= $i['ENDERECO'].' '.$i['NUMERO'] ?></p>
            <p class="card-text txt-color-grey"><?= $i['COMPLEMENTO'].', '.$i['BAIRRO'] ?></p>
            <p class="card-text txt-color-grey"><?= $i['CIDADE_NOME'].', '.$i['ESTADO_SIGLA'].', '.$i['CEP'] ?></p>
            <p class="card-text txt-color-grey"><?= $i['PAIS'] ?></p>
            <p class="card-text txt-color-grey">Telefone: <?= $i['TELEFONE'] ?></p>
            <a href="<?= DIRACTION.'endereco/editarEndereco/'.$i['ID_ENDERECO'] ?>" class="btn btn-teal w-100 mb-2">Editar</a>
            <a href="<?= DIRACTION.'endereco/removerEndereco/'.$i['ID_ENDERECO'] ?>" class="btn btn-red w-100">Remover</a>
          </div>
        </div>
      </div>
      <?php $count++ ?>
    <?php } ?>
  </div> 
</main>