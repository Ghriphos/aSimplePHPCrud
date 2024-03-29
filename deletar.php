<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Dados - Gerenciamento de Biblioteca</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/favicon.ico" rel="icon" type="image/x-icon" />
    <script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="corFundo">
  <?php session_start(); ?>
  <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Gerenciamento de Biblioteca</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="alterar.php">Alterar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="inserir.php">Inserir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="deletar.php">Deletar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="consultar.php">Consultar</a>
              </li>
            </ul>
            <form class="d-flex" role="search" method="post" action="php/controlLogin.php">
              <button type="submit" class="btn btn-primary" name="acao" value="deslogarUsuario"><a class="nav-link fonte" href="index.php">Log Out</a></button>
            </form>
          </div>
        </div>
      </nav>
      <center class="fonte">
            <b>
              <?php if (isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                $_SESSION['msg'] = "";
              }?>
            </b>
          </center>
      <form action="php/controlDeletar.php" method="post">
        <div class="container">
            <br><br>
            <h1 class="text-center fonte">O que deseja deletar do sistema?</h1>
            <br>
            <div class="row">



                <div class="col-lg-4">
                    <div class="mb-3">
                        <br>
                        <h2 class="text-center fonte">Deletar um Livro</h2>
                        <br>
                        <p class="fonte">Aqui, para deletar um livro, é preciso passar o código dele. Insira o código do registro do livro que deseja deletar no campo abaixo:</p>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fonte"><h4>Informações do Livro</h4></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fonte">Código do Livro que deseja excluir</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do livro" name="codLivroDeletarLivro">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que deseja excluir</div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="acao" value="deletarLivro">Deletar</button>
                </div>
                <br>

                
                <div class="col-lg-4">
                    <div class="mb-3">
                      <br>
                        <h2 class="text-center fonte">Deletar uma Biblioteca</h2>
                        <br>
                        <p class="fonte">Aqui, para deletar uma biblioteca, é preciso passar o código dele. Insira o código do registro da biblioteca que deseja deletar no campo abaixo:</p>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fonte"><h4>Informações da Biblioteca</h4></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fonte">Código da Biblioteca que deseja excluir</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código da Biblioteca" name="codBibliotecaDeletarBiblioteca">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que deseja excluir</div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="acao" value="deletarBiblioteca">Deletar</button>
                </div>
                <br>

                <div class="col-lg-4">
                    <div class="mb-3">
                      <br>
                        <h2 class="text-center fonte">Deletar um Autor</h2>
                        <br>
                        <p class="fonte">Aqui, para deletar um autor, é preciso passar o código dele. Insira o código do registro do autor que deseja deletar no campo abaixo:</p>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fonte"><h4>Informações do Autor</h4></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fonte">Código do Autor que deseja excluir</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do Autor" name="codAutorDeletarAutor">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que deseja excluir</div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="acao" value="deletarAutor">Deletar</button>
                    <br><br>
                </div>
                
                <div class="row">
                  
                  
                  <div class="col-lg-6">
                    <br>
                    <div class="mb-3">
                      
                        <h2 class="text-center fonte">Deletar um Usuário</h2>
                        <br>
                        <p class="fonte">Aqui, para deletar um usuario, é preciso passar o login dele. Insira o código do registro do usuário que deseja deletar no campo abaixo:</p>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fonte"><h4>Informações do Usuário</h4></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fonte">Login do Usuário que deseja excluir</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Login do Usuário" name="loginUsuarioDeletarUsuario">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o login que deseja excluir</div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="acao" value="deletarUsuario">Deletar</button>
                    
                  </div>
                  <br>
                  <div class="col-lg-6">
                    <br>
                    <div class="mb-3">
                      
                        <h2 class="text-center fonte">Deletar um Exemplar</h2>
                        <br>
                        <p class="fonte">Aqui, para deletar um exemplar, é preciso passar o código dele. Insira o código do registro do exemplar que deseja deletar no campo abaixo:</p>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fonte"><h4>Informações do Exemplar</h4></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fonte">Código do Exemplar que deseja excluir</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do Exemplar" name="codExemplarDeletarExemplar">
                        <div id="emailHelp" class="form-text">Coloque aqui o código que deseja excluir</div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="acao" value="deletarExemplar">Deletar</button>
                    </div>
                </div>

                
            </div>
            <br>
        </div>
      </form>
</body>
</html>