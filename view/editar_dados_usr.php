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
  <?php require "navbar.php"; ?>


  <!-- USR FORM -->
  <div class="row mt-5">
    <div class="col-md-4"></div>
    
    <div class="col-md-4 _login-cadastro">
      <h3 class="offs-label text-monospace text-dark text-center mt-5 mb-4">Altere seus dados cadastrais</h3>
      <form class="mt-5 ml-4 mr-4">
        <div class="form-group">
          <div class="text-field">
            <input type="text" id="text_cpf" required>
            <label>CPF</label>
          </div>
        </div>
        <div class="form-group">
          <div class="text-field">
            <input type="email" id="text_email" required>
            <label>E-mail</label>
          </div>
        </div>
        <div class="form-group">
            <div class="text-field">
              <input type="password" id="text_old_password" required>
              <label>Senha antiga</label>
            </div>
        </div>
        <div class="form-group">
            <div class="text-field">
              <input type="password" id="text_password" required>
              <label>Nova senha</label>
            </div>
        </div>
        <div class="form-group">
          <div class="text-field">
            <input type="password" id="text_password2" onblur="validarSenha()" required>
            <label>Confirme sua nova senha</label>
          </div>
        </div>
        <div class="form-group">
        <input type="submit" class="btnSubmit bg-success text-whitesmoke" value="Alterar registro" onclick="return validarFormEditarCadastro()"/>
         </div>
      </form>
    </div>

    <div class="col-md-4"></div>

    </div>
  
    
    <!-- FOOTER -->
    <?php require "footer.php" ?>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/editar_cadastro/index.js"></script>
  </body>
</html>