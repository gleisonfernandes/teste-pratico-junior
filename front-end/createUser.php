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
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <?php
        require('header.php');
    ?>
    <main>

      <div class="container marketing">
        <div class="px-4 py-5 my-5">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Cadastro de usuários</h5>
              <div class="row">
                <form class="row g-3" method="POST" name="formUser">
                <p>* Preenchimento obrigatório</p>
                  <div class="col-md-6">
                    <label for="nome" class="form-label">Nome *</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="form-label">E-mail *</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="col-md-6">
                    <label for="senha" class="form-label">Senha *</label>
                      <div class="input-group mb-3">
                        <input type="password" class="form-control" id="senha" name="senha" required>
                        <span class="input-group-text" onclick="versenha()">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                        </span>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <label for="senha" class="form-label">Repita a Senha *</label>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" id="senha2" name="senha2" onblur="verificasenha()" required>
                      <span class="input-group-text" onclick="versenha2()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                          <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div id="passwordHelpBlock" class="col-md-12 form-text">
                      Sua senha deve ter de no mínimo 7 caracteres, conter letras e números 
                      e não deve conter espaços, caracteres especiais ou emoji.
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container -->

    </main>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/verificacaoSenha.js"></script>

      
  </body>
</html>