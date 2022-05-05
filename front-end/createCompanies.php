<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste Pratico Junior</title>


    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Customização do CSS -->
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <?php
        require('header.php');
    ?>
    <main>

    <div class="container marketing">
        <div class="px-4 py-5 my-5">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Cadastro de Empresas</h5>
                <div class="row">
                  <form class="row g-3" method="POST" name="formCompanies">
                      <p>* Preenchimento obrigatório</p>
                      <div class="col-md-7">
                          <label for="nome" class="form-label">Nome da empresa *</label>
                          <input type="text" class="form-control" name="nome" required>
                      </div>
                      <div class="col-md-5">
                          <label for="email" class="form-label">E-mail comercial *</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@exemplo.com" onblur="checarEmail();" required>
                      </div>
                      <div class="col-md-3">
                          <label for="cnpj" class="form-label">CNPJ *</label>
                          <input type="text" class="form-control" id="CNPJInput" name="cnpj" placeholder="00.000.000/0000-00" maxlength="14" oninput="criaMascara('CNPJ')" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" required>
                      </div>
                      <div class="col-md-3">
                          <label for="telefone" class="form-label">Telefone *</label>
                          <input type="text" class="form-control" id="TelefoneInput" name="telefone" placeholder="(00) 0000-0000" maxlength="10" oninput="criaMascara('Telefone')" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                      </div>
                      
                      <div class="col-2">
                          <label for="cep" class="form-label">CEP *</label>
                          <input type="text" class="form-control" id="cepInput" name="cep" placeholder="00000-000" oninput="criaMascara('cep')" onblur="pesquisacep(this.value);" maxlength="8" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" required>
                      </div>
                      <div class="col-4">
                          <label for="rua" class="form-label">Endereço *</label>
                          <input type="text" class="form-control" id="rua" name="rua" required>
                      </div>
                      <div class="col-1">
                          <label for="numero" class="form-label">Nº *</label>
                          <input type="text" class="form-control" id="numero" name="numero" placeholder="0" maxlength="5" required>
                      </div>
                      <div class="col-4">
                          <label for="complemento" class="form-label">Complemento</label>
                          <input type="text" class="form-control" id="complemento" name="complemento" maxlength="100">
                      </div>
                      <div class="col-3">
                          <label for="bairro" class="form-label">Bairro *</label>
                          <input type="text" class="form-control" id="bairro" name="bairro" required>
                      </div>
                      <div class="col-md-3">
                          <label for="cidade" class="form-label">Cidade *</label>
                          <input type="text" class="form-control" id="cidade" name="cidade" required>
                      </div>
                      <div class="col-md-1">
                          <label for="estado" class="form-label">Estado *</label>
                          <input type="text" class="form-control" id="estado" name="estado" required>
                      </div>
                      <div class="col-12">
                          <button type="submit" class="btn btn-primary">Cadastrar</button>
                      </div>
                  </form>

                </div><!-- /.row -->
              </div>
            </div>
        </div>
    </div><!-- /.container -->

    </main>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/buscarCep.js"></script>
    <script src="js/mascarasFormulario.js"></script>

      
  </body>
</html>