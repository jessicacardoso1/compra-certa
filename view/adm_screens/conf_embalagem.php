<main>
  <nav class="navbar bg-salmao">
    <div class="container justify-content-between">
      <a href="<?php echo DIRPAGE.'view'; ?>">
        <img src="<?php echo DIRIMG.'_logo.png'; ?>" alt="logo" width="210">
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
          <h5 class="card-text my-adress-txt">Pedido Nº 55</h5>
        </div>

          <ul class="list-group">
            <li class="list-group-item">
              Frango Sadia
              <div class="custom-control custom-switch adm-conf-emb-span">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1"></label>
              </div>
              <span class="badge badge-primary badge-pill adm-conf-emb-span">1</span>
            </li>
            <li class="list-group-item">
              Óleo de Soja
              <div class="custom-control custom-switch adm-conf-emb-span">
                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                <label class="custom-control-label" for="customSwitch2"></label>
              </div>
              <span class="badge badge-primary badge-pill adm-conf-emb-span">1</span>
            </li>
            <li class="list-group-item">
              Fralda Descartável
              <div class="custom-control custom-switch adm-conf-emb-span">
                <input type="checkbox" class="custom-control-input" id="customSwitch3">
                <label class="custom-control-label" for="customSwitch3"></label>
              </div>
              <span class="badge badge-primary badge-pill adm-conf-emb-span">1</span>
            </li>
            <li class="list-group-item">
              Lasanha Seara
              <div class="custom-control custom-switch adm-conf-emb-span">
                <input type="checkbox" class="custom-control-input" id="customSwitch4">
                <label class="custom-control-label" for="customSwitch4"></label>
              </div>
              <span class="badge badge-primary badge-pill adm-conf-emb-span">2</span>
            </li>
            <li class="list-group-item">
              Tomate
              <div class="custom-control custom-switch adm-conf-emb-span">
                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                <label class="custom-control-label" for="customSwitch5"></label>
              </div>
              <span class="badge badge-primary badge-pill adm-conf-emb-span">5</span>
            </li>
            <li class="list-group-item">
              Feijão Carioquinha 500g
              <div class="custom-control custom-switch adm-conf-emb-span">
                <input type="checkbox" class="custom-control-input" id="customSwitch6">
                <label class="custom-control-label" for="customSwitch6"></label>
              </div>
              <span class="badge badge-primary badge-pill adm-conf-emb-span">5</span>
            </li>
          </ul>

        </div>
        <div class="btn-group" style="width: 100%;" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-success adm-conf-emb-btn mr-2">Voltar Para Preparação</button>
          <button type="button" class="btn btn-success adm-conf-emb-btn">Entrega</button>
        </div>
      </div>
  </div>
</main>
