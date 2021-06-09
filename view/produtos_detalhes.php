<?php 
$dados = $dados[0];

?>


<main>
      <!--PRODUTO DETALHADO-->
    <div class="container border p-3" style="margin-top: 100px; align-items: center; color:black;">
        <div class="row">
          <div class="col"> 
          <img class="card-img-top" src="<?php echo DIRIMG.'itens/'.$dados['IMG'];?>" alt="Livros em promoção" style="width:400px">
        </div>
          <div class="col">
            <div class="row">
              <h3 class="mb-3 text-monospace"><?php echo $dados['NOME_PRODUTO'];?></h3>
            
          </div>
          <hr>
           <div class="row" style="margin-right: 30px;">
            <br><p class="card-title forma-texto"><?php echo $dados['DESCRICAO'];?></p>
          </div><hr>
          <div class="container" style="margin-top: 10px; color: black">
           <div class="row d-flex align-items-center">
            <div class="col-sm-1"></div>
            
            <div class="col-sm-5 mt-2">
              <h4 class="p-2" style="border:solid 0.2px ; border-radius: 5px">Valor: R$ <?php echo $dados['PRECO'];?></h4>
            </div>

            <div class="col-sm-5">
              <div class="btn-group" role="group" aria-label="Exemplo básico">
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white" onClick="btnCounter('input-count', 'sub');">-</button>
                <input id="input-count" type="number" value="1" class="form-control text-center w-75">
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white" onClick="btnCounter('input-count', 'sum');">+</button>
              </div>
            </div>

            <div class="col-sm-1"></div>

          </div>
          <div class="container d-flex justify-content-center mt-4">
          <button onclick=location.href="#" type="button" class="btn cor-bg-teal font-weight-bold text-white mb-2" style="width: 88%;">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
     </div>

     <!--MAIS DETALHES-->
     <div class="container-lg" style="margin-top: 50px; align-items: center; color:black">
     <div class="row">
       <div class="col">
        <h3 class="mb-3 text-monospace">Detalhes do produto:</h3>
     <div class="row">
       <div class="col">       
      <table>
       <tr>
      <th>Categoria:</th>
      <td><?php echo $dados['NOME_CATEGORIA']; ?></td>
      </tr>
     <tr>
       <th>Descrição:</th>
       <td><?php echo $dados['NOME_PRODUTO']; ?></td>
      </tr>
      <tr>
        <th>Tipo:</th>
        <td>Orgânico</td>
       </tr>
    </table>
    </div>
    <div class="col">
      <table>
       <tr>
        <th>Marca:</th>
      <td>JLF</td>
      </tr>
      <tr>
        <th>Embalagem:</th>
      <td>pacote</td>
        </tr>
     
        <tr>
          <th>Peso/Quant:</th>
        <td>500g/1UN</td>
          </tr>
       </div>
      </table>
       </div>
       </div>
      </div>
    </div>
  </div>

     <!--ITENS PARA VOCÊ-->

     <div class="container offs-container" style="margin-top: 200px;">
      <div class="row">
          <div class="col-8">
              <h3 class="mb-3 text-monospace">Aproveite e veja também:</h3>
          </div>
          <div class="col-4 text-right">
              <a class="btn btn-primary mb-3 mr-1 btn-success" href="#carouselExampleIndicators2" role="button"  data-slide="prev">
                  <i class="carousel-control-prev-icon"></i>
              </a>
              <a class="btn btn-primary mb-3 btn-success" href="#carouselExampleIndicators2" role="button" data-slide="next">
                  <i class="carousel-control-next-icon"></i>
              </a>
        </div>
          
          
     <div class="col-12">
      <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="row">

                      <div class="col-md-4 mb-3">
                          <div class="card offs-card-size">
                              <img class="img-fluid offs-img-size" src="<?php echo DIRIMG.'itens/castanha-do-brasil-media-organica.jpg'; ?> ">
                              <div class="card-body">
                                <div class="form-group">
                                  <p class="card-text offs-text-name text-monospace">Castanha do Brasil média 250g</p>
                                  <h5 class="text-success mb-2"><b>R$ 24,99</b><small> à vista</small></h5>
                                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                                </div>
                              </div>

                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <div class="card offs-card-size">
                              <img class="img-fluid offs-img-size" src="<?php echo DIRIMG.'itens/cravo-da-india-organico.jpg'; ?>">
                              <div class="card-body">
                                <div class="form-group">
                                  <p class="card-text offs-text-name text-monospace">Cravo da Índia 20g</p>
                                  <h5 class="text-success mb-2"><b>R$ 7,90</b><small> à vista</small></h5>
                                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <div class="card offs-card-size">
                              <img class="img-fluid offs-img-size" src="<?php echo DIRIMG.'itens/farinha-de-trigo-especial-organico.jpg'; ?>">
                              <div class="card-body">
                                <div class="form-group">
                                  <p class="card-text offs-text-name text-monospace">Farinha de trigo especial 500g</p>
                                  <h5 class="text-success mb-2"><b>R$ 6,90</b><small> à vista</small></h5>
                                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                                </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
              <div class="carousel-item">
                  <div class="row">

                      <div class="col-md-4 mb-3">
                        <div class="card offs-card-size">
                            <img class="img-fluid offs-img-size" src="<?php echo DIRIMG.'itens/farinha-de-trigo-integral-organico.jpg'; ?>">
                            <div class="card-body">
                              <div class="form-group">
                                <p class="card-text offs-text-name text-monospace">Farinha de trigo integral 500g</p>
                                <h5 class="text-success mb-2"><b>R$ 6,90</b><small> à vista</small></h5>
                                <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="card offs-card-size">
                          <img class="img-fluid offs-img-size" src="<?php echo DIRIMG.'itens/farinha-flocada-de-mandioca-organica.jpg'; ?>">
                          <div class="card-body">
                            <div class="form-group">
                              <p class="card-text offs-text-name text-monospace">Farinha de mandioca flocada 500g</p>
                              <h5 class="text-success mb-2"><b>R$ 6,90</b><small> à vista</small></h5>
                              <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card offs-card-size">
                        <img class="img-fluid offs-img-size" src="<?php echo DIRIMG.'itens/fuba-de-milho.jpg'; ?>">
                        <div class="card-body">
                          <div class="form-group">
                            <p class="card-text offs-text-name text-monospace">Fubá de milho 500g</p>
                            <h5 class="text-success mb-2"><b>R$ 6,90</b><small> à vista</small></h5>
                            <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                          </div>
                        </div>
                    </div>
                </div>

                  </div>
              </div>
                  <div class="carousel-item">
                      <div class="row">

                        <div class="col-md-4 mb-3">
                          <div class="card offs-card-size">
                              <img class="img-fluid offs-img-size" src="<?php echo DIRIMG.'itens/feijao-preto-organico.jpg'; ?>">
                              <div class="card-body">
                                <div class="form-group">
                                  <p class="card-text offs-text-name text-monospace">Feijão Preto 500g</p>
                                  <h5 class="text-success mb-2"><b>R$ 14,90</b><small> à vista</small></h5>
                                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <div class="card offs-card-size">
                            <img class="img-fluid offs-img-size" src="<?php echo DIRIMG.'itens/tremoco-em-graos-organico.jpg'; ?>">
                            <div class="card-body">
                              <div class="form-group">
                                <p class="card-text offs-text-name text-monospace">Feijão Tremoço 500g</p>
                                <h5 class="text-success mb-2"><b>R$ 8,90</b><small> à vista</small></h5>
                                <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <div class="card offs-card-size">
                              <img class="img-fluid offs-img-size" src="<?php echo DIRIMG.'itens/acucar-mascavo-organico.jpg'; ?>">
                              <div class="card-body">
                                <div class="form-group">
                                  <p class="card-text offs-text-name text-monospace">Açúcar Mascavo 1kg</p>
                                  <h5 class="text-success mb-2"><b>R$ 17,90</b><small> à vista</small></h5>
                                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                                </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>


</main>