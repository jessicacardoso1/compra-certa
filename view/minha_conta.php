<main>
  <div class="my-account-lab">
  <h3 class="mb-3 text-monospace text-center">Minha conta</h3>
  </div>

  <div class="row my-account-display">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
          <h5 class="card-title">Minhas Compras</h5>
          <p class="card-text txt-color-grey">Veja o status da sua compra, devolva ou compre os produtos novamente</p>
          <a href="<?php echo DIRACTION.'cliente/minhascompras';?>" class="btn btn-teal my-account-btn">Continuar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <i class="fa fa-home fa-3x" aria-hidden="true"></i>
          <h5 class="card-title">Endereços</h5>
          <p class="card-text txt-color-grey">Gerencie seus endereços</p> <br>
          <a href="meus_enderecos.php" class="btn btn-teal my-account-btn">Continuar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <i class="fa fa-asterisk fa-3x" aria-hidden="true"></i>
          <h5 class="card-title">Reembolsos e Boletos</h5>
          <p class="card-text txt-color-grey">Solicitar reembolsos e consultar boletos</p> <br>
          <a href="#" class="btn btn-teal my-account-btn">Continuar</a>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <i class="fa fa-shield fa-3x" aria-hidden="true"></i>
          <h5 class="card-title">Acesso e Segurança</h5>
          <p class="card-text txt-color-grey">Alterar login, senha, nome ou celular</p> <br>
          <a href="<?php echo DIRACTION.'cliente/dados';?>" class="btn btn-teal my-account-btn">Continuar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <i class="fa fa-credit-card-alt fa-3x" aria-hidden="true"></i>
          <h5 class="card-title">Seus Pagamentos</h5>
          <p class="card-text txt-color-grey">Gerenciar cartões e visualizar ofertas</p> <br>
          <a href="#" class="btn btn-teal my-account-btn">Continuar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <i class="fa fa-gift fa-3x" aria-hidden="true"></i>
          <h5 class="card-title">Vale-Presentes</h5>
          <p class="card-text txt-color-grey">Ver saldo ou resgatar um vale-presente</p> <br>
          <a href="#" class="btn btn-teal my-account-btn">Continuar</a>
        </div>
      </div>
    </div>
  </div>
</main>