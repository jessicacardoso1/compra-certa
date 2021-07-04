<main>
  <div class="container mt-5 w-50" style="margin-right: 260px;">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="false">Cadastre-se</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
        <!-- LOGIN FORM -->
        <div class="col-md-6 login-form-1">
          <h3>Faça login na nossa loja</h3>
          <form method="POST" action="<?php echo DIRACTION.'login/processaLogin'; ?>">
              <input type=hidden name=usr_tp value="cliente">
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
                  <input type="submit" class="btnSubmit" value="Login" onclick="return validar_form(['cpf_login', 'senha_login'])"/>
              </div>
              <div class="form-group">
                  <a href="#" class="ForgetPwd">Esqueceu sua senha?</a>
              </div>
          </form>
      </div>
      </div>
      <div class="tab-pane fade" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
        <!-- REGISTER FORM -->
        <div class="col-md-6 login-form-1">
          <h3>Cadastre-se na nossa loja</h3>
          <form form method="POST" action="<?php echo DIRACTION.'cliente/processaCadastro'; ?>">
              <div class="form-group">
                <div class="text-field">
                  <input type="text" name="cpfCadastro" id="cpf_cadastro" onkeypress="cpf_mask(0)" maxlength="14">
                  <label>CPF</label>
                </div>
              </div>
              <div class="form-group">
                <div class="text-field">
                  <input type="text" name="emailCadastro" id="email_cadastro">
                  <label>E-mail</label>
                </div>
              </div>
              <div class="form-group">
                  <div class="text-field">
                    <input type="password" name="senhaCadastro" id="senha_cadastro">
                    <label>Senha</label>
                  </div>
              </div>
              <div class="form-group">
                <div class="text-field">
                  <input type="password" name="confirmarSenhaCadastro" id="confirmar_senha" onblur="validarSenha()">
                  <label>Confirme sua senha</label>
                </div>
              </div>
              <div class="form-group">
                  <input type="submit" class="btnSubmit" value="Continuar" onclick="return validar_form(['cpf_cadastro', 'email_cadastro', 'senha_cadastro', 'confirmar_senha'])"/>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="<?php echo DIRJS.'login_cadastro/index.js'; ?>"></script>
  <script src="<?php echo DIRJS.'index.js'; ?>"></script>
  
</main>