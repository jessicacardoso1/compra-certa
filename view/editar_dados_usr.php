<main>
  <!-- USR FORM -->
  <div class="row mt-5">
    <div class="col-md-4"></div>
    
    <div class="col-md-4 _login-cadastro">
      <h3 class="offs-label text-monospace text-dark text-center mt-5 mb-4">Altere seus dados cadastrais</h3>
      <form class="mt-5 ml-4 mr-4" method="POST" action="<?php echo DIRACTION.'cliente/editarDados'?>">
        <div class="form-group">
          <div class="text-field">
            <input type="text" id="text_cpf" name="cpf" disabled=true value="<?php echo $_SESSION['usuario_logado']?>">
          </div>
        </div>
        <div class="form-group">
          <div class="text-field">
            <input type="email" id="text_email" name="email" value="<?php echo $dados['email']?>">
            <label>E-mail</label>
          </div>
        </div>
        <div class="form-group">
            <div class="text-field">
              <input type="password" id="text_old_password" name="senha">
              <label>Senha antiga</label>
            </div>
        </div>
        <div class="form-group">
            <div class="text-field">
              <input type="password" id="text_password" name="novasenha">
              <label>Nova senha</label>
            </div>
        </div>
        <div class="form-group">
          <div class="text-field">
            <input type="password" id="text_password2" onblur="validarSenha()">
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
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src= "<?php DIRJS.'editar_cadastro/index.js'?>"></script>
 </main>
