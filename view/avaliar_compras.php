<main>
    <!--MENU FIXO-->
    <div class="container" style="margin-left: 15%;">
      <ul class="menu">
        <li class="">
         <a class="menuLink" href="<?php echo DIRACTION.'cliente/minhaConta';?>">Minha conta</a>
        </li>
        <li> > </li>
        <li class="">
          <a class="menuLink" href="<?php echo DIRACTION.'compra/listarCompras';?>">Minha compras</a>
        </li>
        <li> > </li>
        <li>
          <a class="menuLink likAtivo" href="#"> Avaliar compras</a>
        </li>    
      </ul>
    </div>

    <!--AVALIAR-->
    <form class="container" style="margin: 50px 0 0 15%;" method="POST" action="<?php echo DIRACTION.'compra/avaliarCompra'?>">
      <h3 class="text-color aling-left text-monospace">Avalie sua compra:</h3>
      <input type=hidden name="idCompra" id=idCompra value="<?=$dados?>">
      <?php 
        echo '<div class="rating rating-align">';
        for ($i = 1; $i <= 5; $i++){
         echo '<img src="'.DIRIMG.'star0.png" onclick="Avaliar('.$i.')" id="s'.$i.'" class="rating-img-star">'; 
        }
        echo '</div>';
      ?>
       <input type=hidden name=rating id=rating value="">

      <h3 class="text-color aling-left text-monospace">Adicione um título:</h3>
      <input type="text" class="form-control aling-left" placeholder="Título do seu comentário" id="titulo" name="titulo">
      <h3 class="text-color aling-left text-monospace" >Adicione um comentário:</h3>
      <textarea class="form-control aling-left" placeholder="Do que você gostou ou não gostou?" id="exampleTextarea" rows="3" spellcheck="false" data-gramm="false" name="comentario"></textarea>   
      <button type="submit" class="btn cor-bg-teal font-weight-bold text-white aling-left w-50 mb-2 mt-4">Enviar</button>
    </form>
    
    <!-- js -->
    <script src="<?php echo DIRJS.'avaliacao.js'; ?>"></script>
</main>