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


    <!-- CREATE/EDIT ADRESS -->
    <div class="col-md-6 create-edit-adress-display">
      <h3>Endereço</h3>
      <form>
        <div class="form-group">
          <select class="text-field my-adress-field">
            <option>Brasil</option>
          </select>
          <div class="text-field">
            <input type="text" id="text_name" required>
            <label>Nome</label>
          </div>
          <div class="text-field">
            <input type="text" id="text_phone" required>
            <label>Telefone</label>
          </div>
          <div class="form-inline">
            <div class="text-field my-adress-field-aling-two-elements">
              <input type="text" id="text_cep" required>
              <label>CEP</label>
            </div>
            <div class="text-field my-adress-field-aling-two-elements">
              <input type="text" id="text_cep" required>
              <label>Bairro</label>
             </div>
          </div>
          <div class="text-field">
            <input type="text" id="text_adress" required>
            <label>Endereço</label>
          </div>
          <div class="form-inline">
            <div class="text-field my-adress-field-aling-three-elements">
              <input type="text" id="text_city" required>
              <label>Cidade</label>
            </div>
            <div class="text-field my-adress-field-aling-three-elements">
              <input type="text" id="text_email" required>
              <label>UF</label>
            </div>
            <div class="text-field my-adress-field-aling-three-elements">
              <input type="text" id="text_email" required>
              <label>Número</label>
            </div>
          </div>
          <div class="text-field">
            <input type="text" id="text_cmp" required>
            <label>Complemento</label>
          </div>
          <div class="form-group">
            <input type="submit" class="btnSubmit bg-success text-whitesmoke" value="Continuar" />
        </div>
        </div>
      </form>
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