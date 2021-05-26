<!doctype html>
<html lang="en">
  <head>
    <title>Legumes Preciosos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/style.min.css">
  
    <link rel="icon" type="image/png" href="../../img/ref_icon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>
    <nav class="navbar bg-salmao">
      <div class="container justify-content-between">
        <a href="index.html">
          <img src="../../img/_logo.png" alt="logo" width="210">
        </a>
      </div>
    </nav>


    <!-- form -->
    <div class="container login-register">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
          <!-- LOGIN FORM -->
          <div class="col-md-6 login-form-1">
            <h3>Faça login na nossa loja</h3>
            <form method="POST" action="index.php?ctrl=controlador_login&acao=login">
              <input type=hidden name=usr_tp value="funcionario">

                <div class="form-group">
                <div class="form-group">
                  <div class="text-field">
                    <input type="text" name="cpfLogin" id="cpf_login" onkeypress="cpf_mask(1)" maxlength="14">
                    <label>CPF</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="text-field">
                    <input type="password" name="senhaLogin" id="senha_login">
                    <label>Senha</label>
                  </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" onclick="return validarFormLogin()"/>
                </div>
                <div class="form-group">
                    <a href="#" class="ForgetPwd">Esqueceu sua senha?</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- FOOTER -->
    <footer class="text-center text-white">
      <!-- Copyright -->
      <div class="text-center p-3 footer bg-salmao-dark" style="margin-top: 775px;">
        © 2021 Copyright: Legumes Preciosos
        <br>
        Linguagem de Programação III - Jéssica Rocha, Ludmila Brito e Filipe Silva
      </div>
      <!-- Copyright -->
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <script src="../../js/login_cadastro/index.js"></script>

  </body>
</html>