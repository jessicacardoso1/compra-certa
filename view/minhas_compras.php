<?php
var_dump($dados);
?>
<main>
    <!--MENU FIXO-->
    <div class="container" style="margin-left: 15%;">
      <ul class="menu">
        <li class="">
          <a class="menuLink" href="<?php echo DIRACTION.'cliente/minhaConta';?>">Minha conta</a>
        </li>
        <li> > </li>
        <li>
          <a class="menuLink likAtivo" href="#"> Minhas compras</a>
        </li>    
      </ul>
    </div>
    <!--compra -->
    <div class="container">
      <div class="card" style="margin-top: 50px">
          <div class="row">
              <p class="text-compras text-color text-monospace">Compra Nº 0052</p>
          </div>
          <div class="card-body">
              <div class="row align-compras">
                  <div class="col-md-2">
                      <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="img/itens/cenoura.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/itens/cebola.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/itens/repolho.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                  </div>
                  <div class="col-md-5">
                    <small class="text-compras"><p>Resumo da compra:</p></small>
                    <small><p>Compra: 0052</p></small>
                    <small><p>Data do compra: 16/04/2021</p></small>
                    <small><p>Valor total: R$ 40,88</p></small>                     
                    <button type="button" class="btn " style="display: inline; text-decoration: underline" data-toggle="modal" data-target="#myModal">
                      Ver detalhes
                      </button>

                  </div>
                  <div class="col-md-5">
                    <a href=<?php echo DIRACTION.'compra/avaliar'?> class="btn btn-teal my-account-btn w-75">Avaliar compra</a>
                    <a href=<?php echo DIRACTION.'compra/rastrear'?> class="btn btn-teal my-account-btn w-75">Rastrear compra</a>
                    <a href="#" class="btn btn-teal my-account-btn w-75">Comprar novamente</a>
                  </div>
              </div>
          </div>
        </div>
      
  </div>
    <!-- The Modal -->
    <div>
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
        <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="offs-label text-monospace text-center">Resumo da compra</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
          
          <!-- Modal body -->
            <div class="modal-body">
              <div class="row" style="margin-top: 20px;">
                  <div class="col-md-5">
                    <img class="card-img-top" src="img/itens/pimentao.webp" alt="" style="width:130px"> 
                  </div>
                  <div class="col-md-7">
                      <h6 class="offs-label">Pimentão verde</h6>
                      <small style="line-height: 10px;">
                          Receba até 20 de maio<br>
                          Qtd:1<br>
                          R$ 8,90
                      </small>
                  </div>
              </div> <hr>
              <div class="row" style="margin-top: 20px;">
                  <div class="col-md-5">
                <img class="card-img-top" src="img/itens/caqui.jpeg" style="width:130px"> </div>
                <div class="col-md-7">
                    <h6 class="offs-label">Caqui</h6>
                    <small style="line-height: 10px;">
                        Receba até 20 de maio<br>
                        Qtd:1<br>
                        R$ 8,90  
                    </small>
                </div>
              </div>
              <div class="row" style="margin-top: 20px;">
                <div class="col-md-5">
                  <img class="card-img-top" src="img/itens/laranja.jpg" alt="Laranja" style="width:130px"> 
                </div>
                <div class="col-md-7">
                    <h6 class="offs-label">Laranja</h6>
                    <small style="line-height: 10px;">
                        Receba até 20 de maio<br>
                        Qtd:1<br>
                        R$ 8,90
                    </small>
                </div>
            </div> <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>