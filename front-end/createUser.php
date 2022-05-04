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
                    <h5 class="card-title">Cadastro de usuários</h5>
                    <form>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="email" class="form-control" id="nome" name="nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            <div id="passwordHelpBlock" class="form-text">
                                Sua senha deve ter de no mínimo 7 caracteres, conter letras e números 
                                e não deve conter espaços, caracteres especiais ou emoji.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.container -->

    </main>

    <script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>