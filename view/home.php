<?php
  $_GET['url'] = 'home.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Legumes Preciosos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="icon" type="image/png" href="img/ref_icon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>
  <body>
    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner text-center">
			  <div class="carousel-item active">
				  <img class="img-fluid mt-0 w-75" src="img/banners/dino-kale-1920x420-darker.jpg" alt="First slide">
			  </div>
			  <div class="carousel-item">
				  <img class="img-fluid mt-0 w-75" src="img/banners/campo.png" alt="Second slide">
			  </div>
        <div class="carousel-item">
				  <img class="img-fluid mt-0 w-75" src="img/banners/header-pigs_cattle_1920x420_1_.jpg" alt="Second slide">
			  </div>
        <div class="carousel-item">
				  <img class="img-fluid mt-0 w-75" src="img/banners/vegano.jpg" alt="slide">
			  </div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>

      <div class="container offs-container">
        <div class="row">
            <div class="col-8">
                <h3 class="mb-3 offs-label text-monospace">Confira as nossas promoções!</h3>
            </div>
            <div class="col-4 text-right">
                <a class="btn btn-primary mb-3 mr-1 btn-success" href="#carouselExampleIndicators2" role="button"  data-slide="prev">
                    <i class="carousel-control-prev-icon"></i>
                </a>
                <a class="btn btn-primary mb-3 btn-success" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="carousel-control-next-icon"></i>
                </a>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
    
                                <div class="col-md-4 mb-3">
                                    <div class="card offs-card-size">
                                        <img class="img-fluid offs-img-size" src="img/itens/caqui.jpeg">
                                        <div class="card-body">
                                          <div class="form-group">
                                            <p class="card-text offs-text-name text-monospace">Caqui Fuyu Orgânico</p>
                                            <div class="card-text text-muted"><s>De: R$ 19,99</s> por:</div>
                                            <h5 class="text-success mb-2"><b>R$ 16,99</b><small> à vista</small></h5>
                                            <button class="btn cor-bg-teal  text-white w-100 mb-2">Comprar</button>
                                          </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card offs-card-size">
                                        <img class="img-fluid offs-img-size" src="img/itens/cenoura.png">
                                        <div class="card-body">
                                          <div class="form-group">
                                            <p class="card-text offs-text-name text-monospace">Cenoura DeBruin Orgânica</p>
                                            <div class="card-text text-muted"><s>De: R$ 4,99</s> por:</div>
                                            <h5 class="text-success mb-2"><b>R$ 3,99</b> <small> à vista</small></h5>
                                            <button class="btn cor-bg-teal  text-white w-100 mb-2">Comprar</button>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card offs-card-size">
                                        <img class="img-fluid offs-img-size" src="img/itens/cebola.jpg">
                                        <div class="card-body">
                                          <div class="form-group">
                                            <p class="card-text offs-text-name text-monospace">Cebola Chooury Orgânica</p>
                                            <div class="card-text text-muted"><s>De: R$ 6,29</s> por:</div>
                                            <h5 class="text-success mb-2"><b>R$ 5,99</b> <small> à vista</small></h5>
                                            <button class="btn cor-bg-teal  text-white w-100 mb-2">Comprar</button>
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
                                      <img class="img-fluid offs-img-size" src="img/itens/pimentao.webp">
                                      <div class="card-body">
                                        <div class="form-group">
                                          <p class="card-text offs-text-name text-monospace">Pimentão Restib Orgânico</p>
                                            <div class="card-text text-muted"><s>De: R$ 3,59</s> por:</div>
                                            <h5 class="text-success mb-2"><b>R$ 2,99</b> <small> à vista</small></h5>
                                            <button class="btn cor-bg-teal  text-white w-100 mb-2">Comprar</button>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <div class="card offs-card-size">
                                    <img class="img-fluid offs-img-size" src="img/itens/laranja.jpg">
                                    <div class="card-body">
                                      <div class="form-group">
                                        <p class="card-text offs-text-name text-monospace">Laranja Umbigo Orgânica</p>
                                            <div class="card-text text-muted"><s>De: R$ 35,99</s> por:</div>
                                            <h5 class="text-success mb-2"><b>R$ 33,99</b> <small> à vista</small></h5>
                                            <button class="btn cor-bg-teal text-white w-100 mb-2">Comprar</button>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                              <div class="card offs-card-size">
                                  <img class="img-fluid offs-img-size" src="img/itens/repolho.jpg">
                                  <div class="card-body">
                                    <div class="form-group">
                                      <p class="card-text offs-text-name text-monospace">Repolho Verde Orgânico</p>
                                      <div class="card-text text-muted"><s>De: R$ 7,99</s> por:</div>
                                      <h5 class="text-success mb-2"><b>R$ 7,35</b> <small> à vista</small></h5>
                                      <button class="btn cor-bg-teal  text-white w-100 mb-2">Comprar</button>
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
                                        <img class="img-fluid offs-img-size" src="img/itens/tomate.jpg">
                                        <div class="card-body">
                                          <div class="form-group">
                                            <p class="card-text offs-text-name text-monospace">Tomate Orgânico</p>
                                            <div class="card-text text-muted"><s>De: R$ 6,99</s> por:</div>
                                            <h5 class="text-success mb-2"><b>R$ R$ 6,29</b> <small> à vista</small></h5>
                                            <button class="btn cor-bg-teal  text-white w-100 mb-2">Comprar</button>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <div class="card offs-card-size">
                                      <img class="img-fluid offs-img-size" src="img/itens/batata.jpg">
                                      <div class="card-body">
                                        <div class="form-group">
                                          <p class="card-text offs-text-name text-monospace">Batata Orgânica</p>
                                          <div class="card-text text-muted"><s>De: R$ 6,99</s> por:</div>
                                          <h5 class="text-success mb-2"><b>R$ R$ 5,69</b> <small> à vista</small></h5>
                                          <button class="btn cor-bg-teal  text-white w-100 mb-2">Comprar</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <div class="card offs-card-size">
                                        <img class="img-fluid offs-img-size" src="img/itens/banana-prata.png">
                                        <div class="card-body">
                                          <div class="form-group">
                                            <p class="card-text offs-text-name text-monospace">Banana da Prata</p>
                                            <div class="card-text text-muted"><s>De: R$ 9,99</s> por:</div>
                                            <h5 class="text-success mb-2"><b>R$ 8,99</b> <small> à vista</small></h5>
                                            <button class="btn cor-bg-teal  text-white w-100 mb-2">Comprar</button>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!--CARD-PRODUTOS-->
    <div class="container offs-container">
    <div class="row justify-content-center" style=" margin-top: 110px; color: rgb(121, 121, 121);">
      <h3 class="mb-3 offs-label text-monospace">Produtos mais vendidos:</h3>
    </div>
    <div class="container-fluid">
      <div class="produtos d-flex flex-wrap">
        <div class="card mais-vendidos-card-size">
          <img class="card-img-top mais-vendidos-img-size" src="img/itens/batata.jpg" alt="Livros em promoção">
             <div class="card-body">
                <p class="card-text offs-text-name text-monospace">Batatas</p>
                <h5 class="text-success mb-2"><b>R$ 8,99</b> <small> à vista</small></h5>
                <div class="btn-group" role="group" aria-label="Exemplo básico">
                  <button type="button" class="btn cor-bg-teal text-white w-100 mb-2 mr-2">Comprar</button>
                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos1', 'sub');">-</button>
                  <input id="btnMaisVendidos1" type="number" class="form-control text-center w-25" value="1">
                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos1', 'sum');">+</button>
                </div>
              </div>
          </div>

          <div class="card mais-vendidos-card-size">
            <img class="card-img-top mais-vendidos-img-size" src="img/itens/batata.jpg" alt="Livros em promoção">
            <div class="card-body">
                <p class="card-text offs-text-name text-monospace">Batatas</p>
                <h5 class="text-success mb-2"><b>R$ 8,99</b> <small> à vista</small></h5>
                <div class="btn-group" role="group" aria-label="Exemplo básico">
                  <button type="button" class="btn cor-bg-teal text-white w-100 mb-2 mr-2">Comprar</button>
                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos2', 'sub');">-</button>
                  <input id="btnMaisVendidos2" type="number" class="form-control text-center w-25" value="1">
                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos2', 'sum');">+</button>
                </div>
            </div>
          </div>

          <div class="card mais-vendidos-card-size">
            <img class="card-img-top mais-vendidos-img-size" src="img/itens/batata.jpg" alt="Livros em promoção">
            <div class="card-body">
              <p class="card-text offs-text-name text-monospace">Batatas</p>
              <h5 class="text-success mb-2"><b>R$ 8,99</b> <small> à vista</small></h5>
              <div class="btn-group" role="group" aria-label="Exemplo básico">
                <button type="button" class="btn cor-bg-teal text-white w-100 mb-2 mr-2">Comprar</button>
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos3', 'sub');">-</button>
                <input id="btnMaisVendidos3" type="number" class="form-control text-center w-25" value="1">
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos3', 'sum');">+</button>
              </div>
            </div>
          </div>
  
          <div class="card mais-vendidos-card-size">
              <img class="card-img-top mais-vendidos-img-size" src="img/itens/cebola.jpg" alt="Livros em promoção">
              <div class="card-body">
                <p class="card-text offs-text-name text-monospace">Cebolas</p>
                <h5 class="text-success mb-2"><b>R$ 9,99</b> <small> à vista</small></h5>
                <div class="btn-group" role="group" aria-label="Exemplo básico">
                  <button type="button" class="btn cor-bg-teal text-white w-100 mb-2 mr-2">Comprar</button>
                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos4', 'sub');">-</button>
                  <input id="btnMaisVendidos4" type="number" class="form-control text-center w-25" value="1">
                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos4', 'sum');">+</button>
                </div>
              </div>
          </div>
  
          <div class="card mais-vendidos-card-size">
              <img class="card-img-top mais-vendidos-img-size" src="img/itens/caqui.jpeg" alt="Livros em promoção">
              <div class="card-body">
                <p class="card-text offs-text-name text-monospace">Caqui</p>
                <h5 class="text-success mb-2"><b>R$ 18,99</b> <small> à vista</small></h5>
                <div class="btn-group" role="group" aria-label="Exemplo básico">
                    <button type="button" class="btn cor-bg-teal text-white w-100 mb-2 mr-2">Comprar</button>
                    <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos5', 'sub');">-</button>
                    <input id="btnMaisVendidos5" type="number" class="form-control text-center w-25" value="1">
                    <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos5', 'sum');">+</button>
                  </div>
              </div>
          </div>

          <div class="card mais-vendidos-card-size">
            <img class="card-img-top mais-vendidos-img-size" src="img/itens/caqui.jpeg" alt="Livros em promoção">
            <div class="card-body">
              <p class="card-text offs-text-name text-monospace">Caqui</p>
              <h5 class="text-success mb-2"><b>R$ 18,99</b> <small> à vista</small></h5>
              <div class="btn-group" role="group" aria-label="Exemplo básico">
                  <button type="button" class="btn cor-bg-teal text-white w-100 mb-2 mr-2">Comprar</button>
                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos6', 'sub');">-</button>
                  <input id="btnMaisVendidos6" type="number" class="form-control text-center w-25" value="1">
                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white h-25" onClick="btnCounter('btnMaisVendidos6', 'sum');">+</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      <!--CARD DE NOVIDADES-->

      <div class="row justify-content-around" style=" margin-left: auto; margin-top: 110px; color: rgb(121, 121, 121);">
        <h3 class="mb-3 offs-label text-monospace">Novidades que chegaram para você:</h3>
      </div>
      <div class="container-fluid">
        <div class="produtos d-flex">
          <div class="card" style="width: 18rem;">
              <a href="produtos_detalhes.php">
                <img class="card-img-top news-img"src="img/itens/soja.jpg" alt="Livros em promoção">
              </a>
               <div class="card-body">
                  <p class="card-text offs-text-name text-monospace">Soja em grãos 500g</p>
                  <h5 class="text-success mb-2"><b>R$ 18,99</b> <small> à vista</small></h5>
                  <button type="button" class="btn cor-bg-teal text-white w-100">Comprar</button>             
                </div>
            </div>
  
            <div class="card" style="width: 18rem;">
              <img class="card-img-top news-img" src="img/itens/aveia.jpg" alt="Livros em promoção"
              >
              <div class="card-body">
                  <p class="card-text offs-text-name text-monospace">Aveia em flocos 500g</p>
                  <h5 class="text-success mb-2"><b>R$ 8,89</b> <small> à vista</small></h5>
                  <button type="button" class="btn cor-bg-teal text-white w-100">Comprar</button>             
              </div>
            </div>
  
            <div class="card" style="width: 18rem;">
              <img class="card-img-top news-img" src="img/itens/feijao.jpg" alt="Livros em promoção"/>
              <div class="card-body">
                <p class="card-text offs-text-name text-monospace">Feijão carioca 500g</p>
                <h5 class="text-success mb-2"><b>R$ 6,39</b> <small> à vista</small></h5>
                <button type="button" class="btn cor-bg-teal text-white w-100">Comprar</button>             
              </div>
            </div>
    
            <div class="card" style="width: 18rem;">
                <img class="card-img-top news-img" src="img/itens/quinoa.jpg" alt="Livros em promoção" />
                <div class="card-body">
                  <p class="card-text offs-text-name text-monospace">Quinoa 500g</p>
                  <h5 class="text-success mb-2"><b>R$ 5,89</b> <small> à vista</small></h5>
                  <button type="button" class="btn cor-bg-teal text-white w-100">Comprar</button>                               
                </div>
            </div>
    
            <div class="card" style="width: 18rem;">
                <img class="card-img-top news-img" src="img/itens/tapioca.jpg" alt="Livros em promoção"/>
                <div class="card-body">
                  <p class="card-text offs-text-name text-monospace">Tapioca 500g</p>
                  <h5 class="text-success mb-2"><b>R$ 3,59</b> <small> à vista</small></h5>
                  <button type="button" class="btn cor-bg-teal text-white w-100">Comprar</button>             
                </div>
            </div>
           </div>
        </div>
        
		<!-- FOOTER -->
    <?php require "footer.php" ?>

 <!--  <h1>My <span style="color: red;">Important</span> Heading</h1>
    <iframe src="/cadastro.php" title="Produtos em promoção" height="200px" width="1920px"></iframe>-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/index.js"></script>
    <script src="jquerry.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>