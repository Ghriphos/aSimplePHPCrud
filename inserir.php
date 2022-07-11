<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Dados - Gerenciamento de Biblioteca</title>
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
                <a class="nav-link active" aria-current="page" href="inserir.php">Inserir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="deletar.php">Deletar</a>
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
      <form action="php/controlInserir.php" method="post">
          <div class="container">
            <br><br>
            <h1 class="text-center fonte">O que deseja inserir no sistema?</h1>
            <br>
            <h2 class="text-center fonte">Inserir um Livro</h2>
            <br>
            <p class="fonte">Aqui, para inserir um livro, é preciso passar os seguintes dados: código do livro, código do autor que fez o livro, código da biblioteca em que se encontra o livro, o nome do livro, o número de páginas, o gênero, a editora e a sua classificação de idade. Passe as informações necessárias nos campos abaixo:</p>
            <br>
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fonte"><h4>Informações do Livro</h4></label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Código do Livro</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código desejado" name="codLivroInserirLivro">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que deseja colocar</div>
                </div>


                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Código do Autor</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do autor já existente" name="codAutorInserirLivro">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui o código do autor do livro</div>
                </div>


                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Código da Biblioteca</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código da biblioteca já existente" name="codBibliotecaInserirLivro">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui o código da biblioteca que armazena o livro</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Nome do Livro</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Nome do livro" name="nomeLivroInserirLivro">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui o nome do livro</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Número de páginas do livro</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Número de páginas" name="numPaginasInserirLivro">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui a quantidade de páginas que o livro tem</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Gênero do livro</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Gênero do livro" name="generoInserirLivro">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui o gênero do livro</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Editora do livro</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Editora do livro" name="editoraInserirLivro">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui a editora do livro</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Classificação de idade</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Classificação de idade do livro" name="classificacaoInserirLivro">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui a classificação de idade do livro</div>
                </div>


                <button type="submit" class="btn btn-primary" name="acao" value="inserirLivro">Inserir</button>
                <br>
            </div>



            <br><br>
            <h2 class="text-center fonte">Inserir um Autor</h2>
            <br>
            <p class="fonte">Aqui, para inserir um autor, é preciso passar os seguintes dados: código do autor, nome do autor, data de nascimento do autor e a naturalidade. Passe as informações nos campos abaixo:</p>
            <br>
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fonte"><h4>Informações do Autor</h4></label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Código do Autor</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código desejado" name="codAutorInserirAutor">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que deseja colocar</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Nome do Autor</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Nome desejado" name="nomeAutorInserirAutor">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui o nome do autor</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Data de nascimento</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Data de nascimento no formato DD/MM/AAAA" name="dataAutorInserirAutor">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui a data de nascimento do autor</div>
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Naturalidade</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="País de nascimento do autor" name="paisAutorInserirAutor">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui a data de nascimento do autor</div>
                </div>

                <button type="submit" class="btn btn-primary" name="acao" value="inserirAutor">Inserir</button>
                <br>
            </div>


            <br><br>
            <h2 class="text-center fonte">Inserir uma Biblioteca</h2>
            <br>
            <p class="fonte">Aqui, para inserir uma biblioteca, é preciso passar os seguintes dados: código da biblioteca, o nome da biblioteca e o endereço da biblioteca. Passe as informações nos campos abaixo:</p>
            <br>
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fonte"><h4>Informações da Biblioteca</h4></label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Código da Biblioteca</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código desejado" name="codBibliotecaInserirBiblioteca">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que deseja colocar</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Nome da Biblioteca</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Nome desejado" name="nomeBibliotecaInserirBiblioteca">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui o nome da biblioteca</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Endereço da Biblioteca</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Endereço da biblioteca (rua, número, complemento se preciso)" name="enderecoBibliotecaInserirBiblioteca">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui o endereço da biblioteca</div>
                </div>
                <button type="submit" class="btn btn-primary" name="acao" value="inserirBiblioteca">Inserir</button>
            </div>
            <br>

            <br>
            <h2 class="text-center fonte">Inserir um Exemplar</h2>
            <br>
            <p class="fonte">Aqui, para inserir um exemplar, é preciso passar os seguintes dados: código do exemplar, o código do livro e o valor do exemplar. Passe as informações nos campos abaixo:</p>
            <br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Informações do Exemplar</h4></label>
            </div>
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fonte">Código do Exemplar</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código desejado" name="codExemplarIncluirExemplar">
                    <div id="emailHelp" class="form-text">Coloque aqui o código do exemplar</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Código do Livro</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código desejado" name="codLivroIncluirExemplar">
                    <div id="emailHelp" class="form-text">Coloque aqui o valor do total de volumes</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Valor do Exemplar</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código desejado" name="valorExemplarIncluirExemplar">
                    <div id="emailHelp" class="form-text">Coloque aqui o valor do total de volumes</div>
                </div>
    
                <button type="submit" class="btn btn-primary" name="acao" value="incluirExemplar">Inserir</button>
            <br>
            </div>
          </div>
          <br>
      </form>
</body>
</html>