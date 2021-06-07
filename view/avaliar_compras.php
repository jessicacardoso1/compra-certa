<main>
    <!--MENU FIXO-->
    <div class="container" style="margin-left: 15%;">
      <ul class="menu">
        <li class="">
         <a class="menuLink" href="<?php echo DIRACTION.'cliente/minhaConta';?>">Minha conta</a>
        </li>
        <li> > </li>
        <li class="">
          <a class="menuLink" href="<?php echo DIRACTION.'cliente/minhascompras';?>">Minha compras</a>
        </li>
        <li> > </li>
        <li>
          <a class="menuLink likAtivo" href="#"> Avaliar compras</a>
        </li>    
      </ul>
    </div>

    <!--AVALIAR-->
    <form class="container" style="margin: 50px 0 0 15%;" method="POST" action="<?php echo DIRACTION.'compra/avaliar'?>">
      <h3 class="text-color aling-left text-monospace">Avalie sua compra:</h3>
      <div class="rating rating-align">
          <img src="<?php echo DIRIMG.'star0.png';?>" onclick="Avaliar(1)" id="s1" class="rating-img-star">
          <img src="<?php echo DIRIMG.'star0.png';?>" onclick="Avaliar(2)" id="s2" class="rating-img-star">
          <img src="<?php echo DIRIMG.'star0.png';?>" onclick="Avaliar(3)" id="s3" class="rating-img-star">
          <img src="<?php echo DIRIMG.'star0.png';?>" onclick="Avaliar(4)" id="s4" class="rating-img-star">
          <img src="<?php echo DIRIMG.'star0.png';?>" onclick="Avaliar(5)" id="s5" class="rating-img-star">
          <!--
            <p id="rating">0</p>
          -->
          
      </div>
      <h3 class="text-color aling-left text-monospace">Adicione um título:</h3>
      <input type="text" class="form-control aling-left" placeholder="Título do seu comentário" id="titulo" name="titulo">
      <h3 class="text-color aling-left text-monospace" >Adicione um comentário:</h3>
      <textarea class="form-control aling-left" placeholder="Do que você gostou ou não gostou?" id="exampleTextarea" rows="3" spellcheck="false" data-gramm="false" name="comentario"></textarea>   
      <button type="button" class="btn cor-bg-teal font-weight-bold text-white aling-left w-50 mb-2 mt-4">Enviar</button>
    </form>
    
    <!-- form -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/index.js"></script>
    <script src="jquerry.js"></script>
    <script src="js/avaliacao.js"></script>
</main>