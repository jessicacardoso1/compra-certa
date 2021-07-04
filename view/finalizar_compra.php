<?php
  $lista_itens     = $dados[0];
  $total           = $dados[1];
  $qnt_produtos    = $dados[2];
  $lista_enderecos = $dados[3];

  $primeiro_endereco = $lista_enderecos[0];
?>

<main>
  <!--finalizar compra-->
  <div class="container border" style="margin-top: 30px; padding: 30px; color: rgb(71, 73, 76);">
      <div class="row">
        <?php if(count($lista_enderecos) >= 1): ?>
          <div class="col-md-6">
            <h4>Endereço de entrega</h4>
            <p style="line-height: 20px;"><?= $primeiro_endereco->getNome() ?><br>
            <?= $primeiro_endereco->getEndereco().', '.$primeiro_endereco->getBairro().', '. $primeiro_endereco->getNumero() ?><br>    
            <?= $primeiro_endereco->getCidade()->getNome() ?>, <?= $primeiro_endereco->getCidade()->getEstado()->getSigla() ?>, <?= $primeiro_endereco->getCep() ?><br>       
            Brasil<br>          
            Telefone: <?= $primeiro_endereco->getTelefone() ?></p> 

            <button type="button" class="btn " style="display: inline; color: #006400;" data-toggle="modal" data-target="#modal_enderecos">
            <small><i class="fa fa-home fa-3x" style="font-size: 30px;" aria-hidden="true"></i></small> Alterar endereço de entrega
            </button>
          </div>
        <?php else: ?>
            <div class="col-md-6">
              <a style="color:#006400" class="text-decoration-none" href="<?= DIRACTION.'endereco/adicionarEndereco' ?>"> <small><i class="fa fa-home fa-3x" style="font-size: 30px;" aria-hidden="true"></i></small>Criar um novo endereço</a>
            </div>
          <?php endif ?>

          <div class="col-md-6">
              <h4>Resumo da compra</h4>
              <p style="display: inline"><?= $qnt_produtos ?> Produtos</p>
                    <!-- Button to Open the Modal -->
        <button type="button" class="btn " style="display: inline; text-decoration: underline" data-toggle="modal" data-target="#myModal">
        Visualizar
        </button>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Resumo da compra</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <?php foreach($lista_itens as $i): ?>
                  <div class="row" style="margin-top: 20px;">
                    <div class="col-md-5">
                      <img class="card-img-top" src="<?= DIRIMG.'itens/'.$i->getProduto()->getImg() ?>" alt="Livros em promoção" style="width:130px"> </div>
                      <div class="col-md-7">
                        <h6><?= $i->getProduto()->getNome() ?></h6>
                        <small style="line-height: 10px;">
                            Receba até 20 de maio<br>
                            Quantidade: <?= $i->getQuantidade() ?><br>
                            Subtotal: R$ <?= number_format($i->subTotal(),2,',','.') ?>
                        </small>
                      </div>
                    </div> <hr>
                <?php endforeach ?>
              </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>

            <div class="row">
                <div class="col-md-10">
                    <p>Frete</p>
                </div>
                <div class="col-md-2">
                    Grátis!
                </div>
            </div><hr>
            <div class="row">
                <div class="col-md-8">
                  
                </div>
                <div class="col-md-4">
                    <p>Total: R$ <?= number_format($total,2,',','.') ?></p>
                </div>
          </div>

      </div>
      

      </div>
  </div>

    <!--cupom-->
  <div class="container border" style="margin-top: 15px; padding: 30px; color: rgb(71, 73, 76);">
    <div class="row">
        <div class="col-md-12">
          
          <div id="accordion">
            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                  <h4 style="color: #0d4920;">Possui um cupom ou vale?</h4>
                </a>
              </div>
              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  
                    <input type="search" id="form1" class="form-control" style="width: 400px; display:inline" placeholder="Digite seu cupom de desconto"/>
                    <button type="button" class="btn-success" style="display: inline"  value="Aplicar">Aplicar
                      
                    </button>
                  
              </div>
            </div>
         </div>
       </div>
     </div>
  </div>
   </div> 
   
   <!--forma de pagamento-->
 
   <div class="container border" style="padding: 20px; margin-top: 40px; color: rgb(71, 73, 76);">
    <h4>Dados do cartão de crédito</h4><hr>
    <div class="row">
      <div class="col-md-0.5">

      </div>
      <div class="col-md-10">
      <form>


      <h6>Número do cartão</h6>
      <input class="fil"  type="text" name="firstname" >
  
      <h6>Nome impresso no cartão </h6>
      <input class="fil" type="text" name="lastname">



      <div class="row">
        <div class="col-md-3">
      <h6>Validade </h6>
      <input class="fil" style="width: 100%;" type="text" name="lastname">
    </div>
      <div class="col-md-3">
      <h6>CVV </h6>
      <input class="fil" style="width: 100%;" type="text" name="lastname">
    </div>
    <div class="col-md-6"></div>
    </div>

      <h6>Parcelas</h6>
      <select class="fil" name="country">
        <option value="australia">1</option>
        <option value="canada">2</option>
        <option value="usa">3</option>
      </select>
      <div class="row" style="padding: 30px; ">
        <div class="col-md-3">
       <h5>Total:</h5>
       </div>
       
       <div class="col-md-3">
         <h5 style="text-align: right;">R$ <?= number_format($total,2,',','.') ?></h5>
       </div>
       <div class="col-md-6">

      </div>
       </div>
       </form>
       
      <form method="POST" action="<?php echo DIRACTION.'compra/finalizar'?>">
          <input name="endereco" type="hidden" value="<?= $primeiro_endereco->getCodigo() ?>">
          <button type="submit" class=" w-50 btn cor-bg-teal font-weight-bold text-white mb-2" style="width: 120%;">Fechar pedido</button>
      </form>
     
    </div>
    </div>
  </div>

  <!-- The Modal -->
  <div class="modal fade" id="modal_enderecos">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Enderecos</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <?php $contador = 1 ?>
                <?php foreach($lista_enderecos as $i): ?>
                  <div class="row">
                    <div class="col-md-10">
                      <i class="fa fa-home fa-3x" aria-hidden="true"></i> Endereço <?= $contador ?>
                      
                      <h6><?= $i->getNome() ?></h6>
                      <h6><?= $i->getEndereco().', '.$i->getBairro().', '.$i->getCidade()->getEstado()->getSigla().', '.$i->getCep() ?></h6>
                      <h6><?= $i->getPais() ?></h6>
                      Telefone: <h6><?= $i->getTelefone() ?></h6>
                    </div>
                    <div class="col-md-2">
                    <form method="POST" action="<?php echo DIRACTION.'compra/pagamento'?>">
                      <input name="indice_endereco" type="hidden" value="<?= $contador - 1 ?>">
                      <button type="submit" class="btn btn-success">Escolher</button>
                    </form>
                    </div>
                  </div> <hr>
                  <?php $contador++; ?>
                <?php endforeach ?>
              </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>

  </main>