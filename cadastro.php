<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - Gerenciamento de Biblioteca</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/favicon.ico" rel="icon" type="image/x-icon" />
    <script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="corFundo">
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Gerenciamento de Biblioteca</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form class="d-flex" role="search">
              <button type="submit" class="btn btn-primary"><a class="nav-link fonte" href="index.php">Login</a></button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container">
        <br><br>
        <h1 class="text-center fonte">Cadastrar</h1>
        <br><br>
        <form action="php/controlInserir.php">
            <div class="row">
                <div class="col-lg-4"></div>
                
                <div class="col-lg-4">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label fonte">Digite seu login</label>
                      <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="example@email.com" name="loginUsuarioIncluir">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label fonte">Digite sua senha</label>
                      <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Insira sua Senha" name="senhaUsuarioIncluir">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label fonte">Confirme sua senha</label>
                      <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="As senhas precisam ser iguais" name="senhaUsuarioIncluirConfirmar">
                  </div>
                  <button type="submit" class="btn btn-primary" name="acao" value="incluirUsuario">Criar Cadastro</button>
              </div>
              <div class="col-lg-4"></div>
              <br><br>
                
                <br><br>
            </div>
        </form>
    </div>
</body>
</html>