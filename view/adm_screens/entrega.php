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
    <h3 class="offs-label text-monospace text-center mb-3 mt-3">Entrega</h3>
  </div>


  <!-- CONTENT -->
  <!-- form -->
  <div class="container adm-delivery-container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active adm-delivery-icon-up-color" id="home-tab" data-toggle="tab" href="#enviado" role="tab" aria-controls="enviado" aria-selected="true">Enviar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link adm-delivery-icon-right-color" id="profile-tab" data-toggle="tab" href="#em-andamento" role="tab" aria-controls="em-andamento" aria-selected="false">Em Andamento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link adm-delivery-icon-down-color" id="profile-tab" data-toggle="tab" href="#entregue" role="tab" aria-controls="entregue" aria-selected="false">Entregue</a>
      </li>
      <li class="nav-item">
        <a class="nav-link adm-delivery-icon-x-color" id="profile-tab" href="<?php echo DIRACTION.'funcionario-rastrear"' ?>" aria-controls="cadastro" aria-selected="false">Rastreamento Detalhado</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <!-- ENVIADO -->
      <div class="tab-pane fade show active" id="enviado" role="tabpanel" aria-labelledby="enviado-tab">
        <div class="col-md-12 login-form-1">
          <i class="fa fa-arrow-circle-up fa-3x adm-delivery-icon-up-color" style="font-size: 35px;"> Enviar</i>
          <div class="row adm-delivery-display">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center adm-delivery-icon-up-color">#31992 - 10/04/2021</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-user" aria-hidden="true"></i> Filipe Silva</p>
                    </div> 
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-phone" aria-hidden="true"></i> (71) 98222-2222</p>
                    </div>
                  </div>
                  <p class="card-text txt-color-grey"><i class="fa fa-map-o" aria-hidden="true"></i> Salvador-BA</p>
                  <a href="#" class="btn btn-teal my-account-btn">Enviar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center adm-delivery-icon-up-color">#32001 - 10/04/2021</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-user" aria-hidden="true"></i> Filipe Silva</p>
                    </div> 
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-phone" aria-hidden="true"></i> (71) 98222-2222</p>
                    </div>
                  </div>
                  <p class="card-text txt-color-grey"><i class="fa fa-map-o" aria-hidden="true"></i> Salvador-BA</p>
                  <a href="#" class="btn btn-teal my-account-btn">Enviar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center adm-delivery-icon-up-color">#31992 - 10/04/2021</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-user" aria-hidden="true"></i> Filipe Silva</p>
                    </div> 
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-phone" aria-hidden="true"></i> (71) 98222-2222</p>
                    </div>
                  </div>
                  <p class="card-text txt-color-grey"><i class="fa fa-map-o" aria-hidden="true"></i> Salvador-BA</p>
                  <a href="#" class="btn btn-teal my-account-btn">Enviar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center adm-delivery-icon-up-color">#31992 - 10/04/2021</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-user" aria-hidden="true"></i> Filipe Silva</p>
                    </div> 
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-phone" aria-hidden="true"></i> (71) 98222-2222</p>
                    </div>
                  </div>
                  <p class="card-text txt-color-grey"><i class="fa fa-map-o" aria-hidden="true"></i> Salvador-BA</p>
                  <a href="#" class="btn btn-teal my-account-btn">Enviar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- EM ANDAMENTO -->
      <div class="tab-pane fade" id="em-andamento" role="tabpanel" aria-labelledby="em-andamento-tab">
        <div class="col-md-12 login-form-1">
          <i class="fa fa-arrow-circle-right fa-3x adm-delivery-icon-right-color" style="font-size: 35px;"> Em Andamento</i>
          <div class="row adm-delivery-display">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center adm-delivery-icon-right-color">#31992 - 10/04/2021</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-user" aria-hidden="true"></i> Filipe Silva</p>
                    </div> 
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-phone" aria-hidden="true"></i> (71) 98222-2222</p>
                    </div>
                  </div>
                  <p class="card-text txt-color-grey"><i class="fa fa-map-o" aria-hidden="true"></i> Salvador-BA</p>
                  <a href="#" class="btn btn-teal my-account-btn">Concluir Entrega</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center adm-delivery-icon-right-color">#32001 - 10/04/2021</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-user" aria-hidden="true"></i> Filipe Silva</p>
                    </div> 
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-phone" aria-hidden="true"></i> (71) 98222-2222</p>
                    </div>
                  </div>
                  <p class="card-text txt-color-grey"><i class="fa fa-map-o" aria-hidden="true"></i> Salvador-BA</p>
                  <a href="#" class="btn btn-teal my-account-btn">Concluir Entrega</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center adm-delivery-icon-right-color">#31992 - 10/04/2021</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-user" aria-hidden="true"></i> Filipe Silva</p>
                    </div> 
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-phone" aria-hidden="true"></i> (71) 98222-2222</p>
                    </div>
                  </div>
                  <p class="card-text txt-color-grey"><i class="fa fa-map-o" aria-hidden="true"></i> Salvador-BA</p>
                  <a href="#" class="btn btn-teal my-account-btn">Concluir Entrega</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center adm-delivery-icon-right-color">#31992 - 10/04/2021</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-user" aria-hidden="true"></i> Filipe Silva</p>
                    </div> 
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-phone" aria-hidden="true"></i> (71) 98222-2222</p>
                    </div>
                  </div>
                  <p class="card-text txt-color-grey"><i class="fa fa-map-o" aria-hidden="true"></i> Salvador-BA</p>
                  <a href="#" class="btn btn-teal my-account-btn">Concluir Entrega</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ENTREGUE -->
      <div class="tab-pane fade" id="entregue" role="tabpanel" aria-labelledby="entregue-tab">
        <div class="col-md-12 login-form-1">
          <i class="fa fa-arrow-circle-down fa-3x adm-delivery-icon-down-color" style="font-size: 35px;"> Entregue</i>
          <div class="row adm-delivery-display">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center adm-delivery-icon-down-color">#31992 - 10/04/2021</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-user" aria-hidden="true"></i> Filipe Silva</p>
                    </div> 
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-phone" aria-hidden="true"></i> (71) 98222-2222</p>
                    </div>
                  </div>
                  <p class="card-text txt-color-grey"><i class="fa fa-map-o" aria-hidden="true"></i> Salvador-BA</p>
                  <a href="#" class="btn btn-teal my-account-btn" data-toggle="modal" data-target="#modal_1">Visualizar Informações</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center adm-delivery-icon-down-color">#32001 - 10/04/2021</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-user" aria-hidden="true"></i> Filipe Silva</p>
                    </div> 
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-phone" aria-hidden="true"></i> (71) 98222-2222</p>
                    </div>
                  </div>
                  <p class="card-text txt-color-grey"><i class="fa fa-map-o" aria-hidden="true"></i> Salvador-BA</p>
                  <a href="#" class="btn btn-teal my-account-btn">Visualizar Informações</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center adm-delivery-icon-down-color">#31992 - 10/04/2021</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-user" aria-hidden="true"></i> Filipe Silva</p>
                    </div> 
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-phone" aria-hidden="true"></i> (71) 98222-2222</p>
                    </div>
                  </div>
                  <p class="card-text txt-color-grey"><i class="fa fa-map-o" aria-hidden="true"></i> Salvador-BA</p>
                  <a href="#" class="btn btn-teal my-account-btn">Visualizar Informações</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center adm-delivery-icon-down-color">#31992 - 10/04/2021</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-user" aria-hidden="true"></i> Filipe Silva</p>
                    </div> 
                    <div class="col-sm-6">
                      <p class="card-text txt-color-grey"><i class="fa fa-phone" aria-hidden="true"></i> (71) 98222-2222</p>
                    </div>
                  </div>
                  <p class="card-text txt-color-grey"><i class="fa fa-map-o" aria-hidden="true"></i> Salvador-BA</p>
                  <a href="#" class="btn btn-teal my-account-btn">Visualizar Informações</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- MODAL  -->
      <div class="modal fade adm-rel-1" tabindex="-1" id="modal_1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <table class="table table-hover adm-modal-table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">CPF</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Data/Horário</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">#</th>
                  <td>Ludmila Brito</td>
                  <td>888.777.666-55</td>
                  <td>(71) 98888-9999</td>
                  <td>20/04/2020 - 16:38:25</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>
