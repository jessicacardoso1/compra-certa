<!doctype html>
<html lang="en">
  <head>
    <title>Avaliar Compras</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="icon" type="image/png" href="img/ref_icon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
  </head>
  
  <body>
  <?php require "navbar.php"; ?>

    <!--MENU FIXO-->
    <div class="container" style="margin-left: 15%;">
      <ul class="menu">
        <li class="">
          <a class="menuLink" href="index.php">Home</a>
        </li>
        <li> > </li>
        <li class="">
          <a class="menuLink" href="minhas_compras.php">Minhas compras</a>
        </li>
        <li> > </li>
        <li>
          <a class="menuLink likAtivo" href="#"> Avaliar compras</a>
        </li>    
      </ul>
    </div>

    <!--AVALIAR-->
    <div class="container" style="margin: 50px 0 0 15%;">
      <h3 class="text-color aling-left text-monospace">Avalie sua compra:</h3>
      <div class="rating rating-align">
          <img src="img/star0.png" onclick="Avaliar(1)" id="s1" class="rating-img-star">
          <img src="img/star0.png" onclick="Avaliar(2)" id="s2" class="rating-img-star">
          <img src="img/star0.png" onclick="Avaliar(3)" id="s3" class="rating-img-star">
          <img src="img/star0.png" onclick="Avaliar(4)" id="s4" class="rating-img-star">
          <img src="img/star0.png" onclick="Avaliar(5)" id="s5" class="rating-img-star">
          <!--
            <p id="rating">0</p>
          -->
          
      </div>
      <h3 class="text-color aling-left text-monospace">Adicione um título:</h3>
      <input type="text" class="form-control aling-left" placeholder="Título do seu comentário" id="inputDefault">
      <h3 class="text-color aling-left text-monospace" >Adicione um comentário:</h3>
      <textarea class="form-control aling-left" placeholder="Do que você gostou ou não gostou?" id="exampleTextarea" rows="3" spellcheck="false" data-gramm="false"></textarea>   
      <button type="button" class="btn cor-bg-teal font-weight-bold text-white aling-left w-50 mb-2 mt-4">Enviar</button>
    </div>
    
    <!-- form -->
    
    
    <!-- FOOTER -->
    <?php require "footer.php" ?>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/index.js"></script>
    <script src="jquerry.js"></script>
    <script src="js/avaliacao.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>