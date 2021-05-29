<?php

  $categorias = array();
  foreach($dados as &$c){
    if(!in_array($c['NOME_CATEGORIA'], $categorias))
      array_push($categorias, $c['NOME_CATEGORIA']);
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Produtos</title>
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
    <?php require "navbar.php"; ?>
        
  <!--MENU FIXO-->
    <ul class="menu">
      <li class="">
        <a class="menuLink" href="index.php">Home</a>
      </li>
      <li> > </li>
      <li>
        <a class="menuLink likAtivo" href="#"> Produtos</a>
      </li>    
    </ul>

    <div class="row" style="margin-top: 50px;">


      <div class="col-sm-1"></div>


      <div class="col-sm-2">
        <div class="row">
          <h6 class = "titulo">Ordenar por:</h6>
        </div>
        <div class="row">
          <div class="form-group">
            <select class="form-control-select select" aria-label="Default select example" name="relevancia" onchange="MostrarProdutosCategoria('ordenacao', this.value)">
              <option value="relevancia" selected>Relevância</option>
              <option value="nomeCrescente">Nome [A-Z]</option>
              <option value="nomeDecrescente">Nome [Z-A]</option>
              <option value="precoCrescente">Preço [Maior]</option>
              <option value="precoDecrescente">Preço [Menor]</option>
            </select>
          </div>
        </div>

        <div class="row">
          <h6 class = "titulo" >Filtrar:</h6>
        </div>

        <div class="col-md-10-mb-6 .col-prod filtro">
          <div class="container btn-group">
            <a class="btnSubmit filtro" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Categoria</a>
            <i class="fa fa-plus filtro cor-icone mt-2" aria-hidden="true" data-toggle="collapse" data-target="#multiCollapseExample1" style="cursor: pointer"></i>
          </div>
        </div>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card card-body">
            <?php
              for($i = 0; $i < count($categorias); $i++){
                echo '<div class="form-inline">';
                echo '<div class="custom-control custom-checkbox">';
                echo '<input type="checkbox" class="custom-control-input adjust adjust-checkbox-collapse" name="customCheck" id="customControlInline'.$i.'" value="'.$categorias[$i].'" onchange="MostrarProdutosCategoria("categoria", this.value)">';
                echo '<label class="custom-control-label" for="customControlInline1">'.$categorias[$i].'</label>';
                echo '</div>';
                echo '</div>';
              }
            ?>
          </div>
        </div>
        <div class="col-md-10-mb-6 col-prod filtro">
          <div class="container btn-group">
            <a class="btnSubmit filtro" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Disponibilidade</a>
            <i class="fa fa-plus filtro cor-icone mt-2" aria-hidden="true" data-toggle="collapse" data-target="#multiCollapseExample2" style="cursor: pointer"></i>
          </div>
        </div>
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card card-body">
            <div class="form-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input adjust adjust-checkbox-collapse"  name="customCheck" id="customControlInline1">
                <label class="custom-control-label" for="customControlInline1">Disponível (30)</label>
              </div>
            </div>
            <div class="form-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input adjust-checkbox-collapse" name="customCheck" id="customControlInline2">
                <label class="custom-control-label" for="defaultCheck">Indisponivel (5)</label>
              </div>
            </div>
          </div>
        </div>
      </div>
              
        
      <div class="col-sm-8 card">
        <h3 class="mb-3 offs-label text-monospace mt-2">Todos os produtos</h3>
        <div class="row">
          <div class="container-fluid">
            <div class="produtos d-flex flex-wrap">
              <?php
                foreach($dados as &$c){
                  echo '<div class="card" style="width: 18rem;">';
                  echo '<img class="card-img-top news-img" src="img/itens/'.$c['IMG'].'" alt="'.$c['IMG'].'"/>';
                  echo '<div class="card-body">';
                  echo '<p class="card-text offs-text-name text-monospace">'.$c['NOME_PRODUTO'].'</p>';
                  echo '<h5 class="text-success mb-2"><b>R$ '.$c['PRECO'].'</b> <small> à vista</small></h5>';
                  echo '<button class="btn cor-bg-teal text-white w-100 mb-2">Comprar</button>';
                  echo '</div>';
                  echo '</div>';
                }
              ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-1"></div>

    </div>
    
  
    <!-- FOOTER -->
    <?php require "footer.php" ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>