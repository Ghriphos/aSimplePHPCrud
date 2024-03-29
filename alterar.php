<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados - Gerenciamento de Biblioteca</title>
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
                <a class="nav-link active" aria-current="page" href="alterar.php">Alterar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="inserir.php">Inserir</a>
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
      <form action="php/controlAlterar.php" method="post">
      
        <div class="containerr">
        

          <!-- Tabela Autor -->

          <br><br>
          <h2 class="text-center fonte">Alterar Tabela Autor</h2>
          <br>
            <div class="row" >
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar nome pelo código</h4></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fonte">Novo Nome</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Nome desejado" name="nomeAutorNovo">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o nome que deseja colocar</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fonte">Código do registro</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do registro" name="codAutorNome">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que consta no registro alvo de alteração</div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="acao" value="alterarNomeAutorCodigo">Alterar</button>
                    <br><br>
                </div>


                
                <div class="col-lg-4">
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar país pelo código</h4></label>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label fonte">Novo Valor</label>
                      <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="País desejado" name="paisAutorNovo">
                      <div id="emailHelp" class="form-text instrucao">Coloque aqui o país que deseja colocar</div>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label fonte">Código do registro</label>
                      <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do registro" name="codAutorPais">
                      <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que consta no registro alvo de alteração</div>
                  </div>
                  <button type="submit" class="btn btn-primary" name="acao" value="alterarPaisAutorCodigo">Alterar</button>
                  <br><br>
              </div>



              <div class="col-lg-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar data pelo código</h4></label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Novo Valor</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Data no formato DD/MM/AAAA" name="dataAutorNovo">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui a data que deseja colocar</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Código do registro</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do registro" name="codAutorData">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que consta no registro alvo de alteração</div>
                </div>
                <button type="submit" class="btn btn-primary" name="acao" value="alterarDataAutorCodigo">Alterar</button>
                <br><br>
            </div>
        </div>

        <!-- Tabela Biblioteca -->

        <br><br>
        <h2 class="text-center fonte">Alterar Tabela Biblioteca</h2>
        <br>
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar nome pelo código</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Novo Nome</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Nome desejado" name="nomeBibliotecaNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o nome que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Código do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do registro" name="codBibliotecaNome">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que consta no registro alvo de alteração</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarNomeBibliotecaCodigo">Alterar</button>
            <br><br>
          </div>



          <div class="col-lg-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar endereço pelo código</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Novo endereço</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Endereço desejado (rua, número, complemento se preciso)" name="enderecoBibliotecaNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o endereço que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Código do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do registro" name="codBibliotecaEndereco">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que consta no registro alvo de alteração</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarEnderecoBibliotecaCodigo">Alterar</button>
            <br><br>
          </div>
        </div>

        <!-- Tabela Livro -->

        <br><br>
        <h2 class="text-center fonte">Alterar Tabela Livro</h2>
        <br>
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar nome pelo código</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Novo Nome</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Nome desejado" name="nomeLivroNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o nome que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Código do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do registro" name="codLivroNome">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que consta no registro alvo de alteração</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarNomeLivroCodigo">Alterar</button>
            <br><br>
          </div>



          <div class="col-lg-4">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar número de paginas</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Novo Número de Páginas</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Número desejado" name="numPagLivroNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o número de páginas que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Código do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do registro" name="codLivroNumPag">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que consta no registro alvo de alteração</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarNumPagLivroCodigo">Alterar</button>
            <br><br>
          </div>
          


          <div class="col-lg-4">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar gênero pelo código</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Novo Gênero</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Gênero desejado" name="generoLivroNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o gênero que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Código do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do registro" name="codLivroGenero">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que consta no registro alvo de alteração</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarGeneroLivroCodigo">Alterar</button>
            <br><br>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar editora pelo código</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Nova Editora</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Editora desejada" name="editoraLivroNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui a editora que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Código do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do registro" name="codLivroEditora">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que consta no registro alvo de alteração</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarEditoraLivroCodigo">Alterar</button>
            <br><br>
          </div>



          <div class="col-lg-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar classificação de idade</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Nova Classificação</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Classificação desejada" name="classificacaoLivroNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui a classificação de idade que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Código do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do registro" name="codLivroClassificacao">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que consta no registro alvo de alteração</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarClassificacaoLivroCodigo">Alterar</button>
            <br><br>
          </div>
        </div>

        <br><br>
        <h2 class="text-center fonte">Alterar Tabela Exemplar</h2>
        <br><br>
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar código do Exemplar</h4></label>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label fonte">Novo código</label>
              <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Número desejado" name="codExemplar">
              <div id="emailHelp" class="form-text">Coloque aqui o número que deseja colocar</div>
            </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label fonte">Código do registro</label>
              <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do registro" name="valorExemplar">
              <div id="emailHelp" class="form-text">Coloque aqui o código que consta no registro alvo de alteração</div>
          </div>
          <button type="submit" class="btn btn-primary" name="acao" value="alterarCodExemplarCodigo">Alterar</button>
          <br><br>
        </div>
        <div class="col-lg-6">
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar valor do Exemplar</h4></label>
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label fonte">Novo valor do Exemplar</label>
              <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Número desejado" name="valorExemplarAlterar">
              <div id="emailHelp" class="form-text">Coloque aqui o valor que deseja colocar</div>
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label fonte">Código do registro</label>
              <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código do registro" name="codExemplarAlterar">
              <div id="emailHelp" class="form-text">Coloque aqui o código que consta no registro alvo de alteração</div>
          </div>
          <button type="submit" class="btn btn-primary" name="acao" value="alterarValorExemplarCodigo">Alterar</button>
          <br><br>
        </div>

      </div>
      </form>
</body>
</html>