<?php

  $categorias = array();
  foreach($dados as &$c){
    if(!in_array($c['NOME_CATEGORIA'], $categorias))
      array_push($categorias, $c['NOME_CATEGORIA']);
  }

?>
<main>
  <!--MENU FIXO-->
  <ul class="menu">
    <li class="">
      <a class="menuLink" href="home">Home</a>
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
                echo '<a href="'.DIRACTION.'produto/detalhes/'.$c['ID'].'">';
                echo '<img href="/cliente/dado"class="card-img-top news-img" src="'.DIRIMG.'itens/'.$c['IMG'].'" alt="'.$c['IMG'].'"/>';
                echo '</a>';
                echo '<div class="card-body">';
                echo '<p class="card-text offs-text-name text-monospace">'.$c['NOME_PRODUTO'].'</p>';
                if(isset($c['PRECO_NOVO_PRODUTO'])){
                  echo '<div class="card-text text-muted"><s>De: R$ '.$c['PRECO'].'</s> por:</div>';
                  echo '<h5 class="text-success mb-2"><b>R$ '.$c['PRECO_NOVO_PRODUTO'].'</b> <small> à vista</small></h5>';
                }
                else{
                  echo '<h5 class="text-success mb-2"><b>R$ '.$c['PRECO'].'</b> <small> à vista</small></h5>';
                }
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
</main>