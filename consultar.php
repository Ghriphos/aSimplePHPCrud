<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Dados - Gerenciamento de Biblioteca</title>
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
                <a class="nav-link" aria-current="page" href="deletar.php">Deletar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="consultar.php">Consultar</a>
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
      
        <div class="container">
            <br><br>
            <h1 class="text-center fonte">O que deseja consultar do sistema?</h1>
            <br>
            <h2 class="text-center fonte">Consultar nas Tabelas</h2>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                    <form action="php/controlConsultar.php">

                        <h4 class="fonte">Consultar tudo na tabela livro</h4> 
                        <input type="hidden"  name="acao" value="consultarTudoLivro">

                        <br><button type="submit" class="btn btn-primary fonte" href="tabelaLivro">Consultar</button>
                    </form>   
                    </div>
                    <div class="mb-3">
                    <form action="php/controlConsultar.php">
                      <h4 class="fonte">Consultar livro pelo código</h4>
                        <label for="exampleInputPassword1" class="form-label fonte">Código do Livro</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código desejado" name="codLivroConsultar">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que deseja consultar</div>
                        <br>
                        <input type="hidden"  name="acao" value="consultarLivroCodigo">
                        <button type="submit" class="btn btn-primary" >Consultar</button>
                    </form>   
                    </div>
                    <div class="mb-3">
                    <form action="php/controlConsultar.php">
                      <h4 class="fonte">Consultar livro pelo nome</h4>
                        <label for="exampleInputPassword1" class="form-label fonte">Nome do Livro</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código desejado" name="nomeLivroConsultar">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o nome que deseja consultar</div>
                        <br>
                        <input type="hidden"  name="acao" value="consultarLivroNome">
                        <button type="submit" class="btn btn-primary" >Consultar</button>
                    </form>   
                    </div>
                    
                </div>



                <div class="col-lg-4">
                    <div class="mb-3">
                    <form action="php/controlConsultar.php">
                        <h4 class="fonte">Consultar tudo na tabela Autor</h4> 
                        <input type="hidden" name="acao" value="consultarTudoAutor">
                        <br><button type="submit" class="btn btn-primary" >Consultar</button>
                    </form>
                    </div>
                    <div class="mb-3">
                    <form action="php/controlConsultar.php">
                      <h4 class="fonte">Consultar autor pelo código</h4>
                        <label for="exampleInputPassword1" class="form-label fonte">Código do Autor</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código desejado" name="codAutorConsultar">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que deseja consultar</div>
                        <input type="hidden" name="acao" value="consultarAutorCodigo">
                        <br>
                        <button type="submit" class="btn btn-primary" >Consultar</button>
                    </form>
                    </div>
                    <div class="mb-3">
                    <form action="php/controlConsultar.php">
                      <h4 class="fonte">Consultar autor pelo nome</h4>
                        <label for="exampleInputPassword1" class="form-label fonte">Nome do Autor</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Nome desejado" name="nomeAutorConsultar">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o nome que deseja consultar</div>
                        <input type="hidden" name="acao" value="consultarAutorNome">
                        <br>
                        <button type="submit" class="btn btn-primary" >Consultar</button>
                    </form>   
                    </div>
                    
                </div>



                <div class="col-lg-4">
                    <div class="mb-3">
                    <form action="php/controlConsultar.php">
                        <h4 class="fonte">Consultar tudo na tabela Biblioteca</h4>
                        <input type="hidden" name="acao" value= "consultarTudoBiblioteca">
                        <br><button type="submit" class="btn btn-primary" >Consultar</button>
                    </form>   
                    </div>
                    <div class="mb-3">
                    <form action="php/controlConsultar.php">
                      <h4 class="fonte">Consultar biblioteca pelo código</h4>
                        <label for="exampleInputPassword1" class="form-label fonte">Código da biblioteca</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código desejado" name="codBibliotecaConsultar">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o código que deseja consultar</div>
                        <input type="hidden" name="acao" value= "consultarBibliotecaCodigo">
                        <br>
                        <button type="submit" class="btn btn-primary" >Consultar</button>
                    </form>   
                    </div>
                    <div class="mb-3">
                    <form action="php/controlConsultar.php">
                      <h4 class="fonte">Consultar biblioteca pelo nome</h4>
                        <label for="exampleInputPassword1" class="form-label fonte">Nome da biblioteca</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Nome desejado" name="nomeBibliotecaConsultar">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o nome que deseja consultar</div>
                        <br>
                        <input type="hidden" name="acao" value="consultarBibliotecaNome">
                        <button type="submit" class="btn btn-primary" >Consultar</button>
                    </form>   
                    </div>
                    
                </div>
            </div>
            <br><br>

            <div class="row">
                <div class="col-lg-6">
                
                  <div class="mb-3">
                  <form action="php/controlConsultar.php">
                      <h4 class="fonte">Consultar tudo na tabela usuarios</h4> 
                      <input type="hidden" name="acao" value="consultarTudoUsuario">
                      <br><button type="submit" class="btn btn-primary fonte" >Consultar</button>
            </form>    
                  </div>
                  <div class="mb-3">
                  <form action="php/controlConsultar.php">
                      <label for="exampleInputPassword1" class="form-label fonte">Login do Usuário</label>
                      <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Login desejado" name="loginUsuarioConsultar">
                      <div id="emailHelp" class="form-text instrucao">Coloque aqui o login que deseja consultar</div>
                  </div>
                  <input type="hidden" name="acao" value="consultarUsuarioLogin">
                  <button type="submit" class="btn btn-primary" >Consultar </button>
                  </form>   

              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                <form action="php/controlConsultar.php">

                    <h4 class="fonte">Consultar tudo na tabela Exemplar</h4> 
                    <input type="hidden" name="acao" value="consultarTudoExemplar">
                    <br><button type="submit" class="btn btn-primary" >Consultar</button>
                </form>    
                </div>
                <div class="mb-3">
                <form action="php/controlConsultar.php">

                    <label for="exampleInputPassword1" class="form-label fonte">Código do Exemplar</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Código desejado" name="codExemplarConsultar">
                    <div id="emailHelp" class="form-text">Coloque aqui o código que deseja consultar</div>
                    
                </div>
                <input type="hidden"  name="acao" value="consultarExemplarCodigo">
                <button type="submit" class="btn btn-primary">Consultar</button>
            </form>
             </div>
             
              
            </div>
            <br>
      <div class="col-lg-12">
        <center>
          <b class="fonte">Lista dos Livros</b>
        </center>
        
          <table border=1 class="fonte" id="tabelaLivro">
            <tr>
              <td><b>Código do Livro </b></td>
              <td><b>Código do Autor </b></td>
              <td><b>Código da Biblioteca </b></td>
              <td><b>Nome do Livro</b></td>
              <td><b>Número de Páginas </b></td>
              <td><b>Gênero </b></td>
              <td><b>Editora </b></td>
              <td><b>Classificação de Idade </b></td>
            </tr>
            <?php
            if (isset($_SESSION)){
              if($_SESSION['quantidade'] == "tudo"){
                if (!empty($_SESSION['lista_livro']) and $_SESSION['tabela'] == 'livro'){
                  foreach ($_SESSION as $lista_livro => $value){
                    foreach ($_SESSION[$lista_livro] as $linha_livro => $chave){
                      echo '<tr>'; 
                      foreach ($_SESSION[$lista_livro] [$linha_livro] as $campo) {
                        echo '<td>' . $campo . '</td>';
                      }
                      echo '</tr>';
                    }
          
                  }
                  $_SESSION['quantidade'] == "";
                  $_SESSION['tabela'] == "";
                }
              }
              elseif ($_SESSION['quantidade'] == "um" and $_SESSION['tabela'] == "livro"){
                if(isset($_SESSION)){
                  foreach ($_SESSION as $linha_livro => $value){
                    echo '<tr>';
                    foreach ($_SESSION[$linha_livro] as $campo) {
                      echo '<td>' . $campo . '</td>';
                    };
                    echo '<tr>';
                  }
                  $_SESSION['quantidade'] == "";
                  $_SESSION['tabela'] == "";
                }
                
              }
            } 
            
            
                  ?>
                  
                  
                  
                  <br>
        </div>
        
        </table>

        <center>
          <b class="fonte">Lista dos Autores</b>
        </center>
        
          <table border=1 class="fonte">
            <tr>
              <td><b>Código do Autor</b></td>
              <td><b>Nome do Autor</b></td>
              <td><b>Data de Nascimento</b></td>
              <td><b>Nacionalidade</b></td>
            </tr>
            <?php 
            if(isset($_SESSION)){
              if($_SESSION['quantidade'] == "tudo"){
                if (!empty($_SESSION['lista_autor']) and $_SESSION['tabela'] == 'autor'){
                  foreach ($_SESSION as $lista_autor => $value){
                    foreach ($_SESSION[$lista_autor] as $linha_autor => $chave){
                      echo '<tr>'; 
                      foreach ($_SESSION[$lista_autor] [$linha_autor] as $campo) {
                        echo '<td>' . $campo . '</td>';
                      }
                      echo '</tr>';
                    }
          
                  }
                  $_SESSION['quantidade'] == "";
                  $_SESSION['tabela'] == "";
                }
              }

                elseif ($_SESSION['quantidade'] == "um" and $_SESSION['tabela'] == 'autor'){
                  if (isset($_SESSION)) {
                    foreach ($_SESSION as $linha_autor => $value){
                      echo '<tr>';
                      foreach ($_SESSION[$linha_autor] as $campo) {
                        echo '<td>' . $campo . '</td>';
                      };
                      echo '<tr>';
                    }
                    $_SESSION['quantidade'] == "";
                    $_SESSION['tabela'] == "";
                  }
                    
                  }
                }
            
              
                  ?>   
                  <br>
        </div>
        
        </table>
        <center>
          <b class="fonte">Lista das Bibliotecas</b>
        </center>
         <table border=1 class="fonte">
        <tr>
              <td><b>Código da Biblioteca</b></td>
              <td><b>Nome da Biblioteca</b></td>
              <td><b>Endereço da Biblioteca</b></td>
        </tr>
        <?php 
            if(isset($_SESSION)){
              if($_SESSION['quantidade'] == "tudo"){
                if (!empty($_SESSION['lista_biblioteca']) and $_SESSION['tabela'] == 'biblioteca'){
                  foreach ($_SESSION as $lista_biblioteca => $value){
                    foreach ($_SESSION[$lista_biblioteca] as $linha_biblioteca => $chave){
                      echo '<tr>'; 
                      foreach ($_SESSION[$lista_biblioteca] as $campo) {
                        echo '<td>' . $campo . '</td>';
                      }
                      echo '</tr>';
                    }
          
                  }
                  $_SESSION['quantidade'] == "";
                  $_SESSION['tabela'] == "";
                }
              }

                elseif ($_SESSION['quantidade'] == "um" and $_SESSION['tabela'] == 'biblioteca'){
                  if (isset($_SESSION)) {
                    foreach ($_SESSION as $linha_biblioteca => $value){
                      echo '<tr>';
                      foreach ($_SESSION[$linha_biblioteca] as $campo) {
                        echo '<td>' . $campo . '</td>';
                      };
                      echo '<tr>';
                    }
                    $_SESSION['quantidade'] == "";
                    $_SESSION['tabela'] == "";
                  }
                    
                  }
                }
            
              
                  ?>   
                  <br>
        </div>
        
        </table>
        <center>
          <b class="fonte">Lista dos Usuários</b>
        </center>
         <table border=1 class="fonte">
        <tr>
              <td><b>Login do Usuário</b></td>
              
        </tr>
        <?php 
            if(isset($_SESSION)){
              if($_SESSION['quantidade'] == "tudo"){
                if (!empty($_SESSION['lista_usuario']) and $_SESSION['tabela'] == 'usuario'){
                  foreach ($_SESSION as $lista_usuario => $value){
                    foreach ($_SESSION[$lista_usuario] as $linha_usuario => $chave){
                      echo '<tr>'; 
                      foreach ($_SESSION[$lista_usuario] [$linha_usuario] as $campo) {
                        echo '<td>' . $campo . '</td>';
                      }
                      echo '</tr>';
                    }
          
                  }
                  $_SESSION['quantidade'] == "";
                  $_SESSION['tabela'] == "";
                }
              }

                elseif ($_SESSION['quantidade'] == "um" and $_SESSION['tabela'] == 'usuario'){
                  if (isset($_SESSION)) {
                    foreach ($_SESSION as $linha_usuario => $value){
                      echo '<tr>';
                      foreach ($_SESSION[$linha_usuario] as $campo) {
                        echo '<td>' . $campo . '</td>';
                      };
                      echo '<tr>';
                    }
                    $_SESSION['quantidade'] == "";
                    $_SESSION['tabela'] == "";
                  }
                    
                  }
                }
            
              
                  ?>   
                  <br>
        </div>
        
        </table>
        <center>
          <b class="fonte">Lista dos Exemplares</b>
        </center>
         <table border=1 class="fonte">
        <tr>
              <td><b>Código do Exemplar</b></td>
              <td><b>Código do Livro</b></td>
              <td><b>Valor do Exemplar</b</td>
              
        </tr>
        <?php 
            if(isset($_SESSION)){
              if($_SESSION['quantidade'] == "tudo"){
                if (!empty($_SESSION['lista_exemplar']) and $_SESSION['tabela'] == 'exemplar'){
                  foreach ($_SESSION as $lista_exemplar => $value){
                    foreach ($_SESSION[$lista_exemplar] as $linha_exemplar => $chave){
                      echo '<tr>'; 
                      foreach ($_SESSION[$lista_exemplar] [$linha_exemplar] as $campo) {
                        echo '<td>' . $campo . '</td>';
                      }
                      echo '</tr>';
                    }
          
                  }
                  $_SESSION['quantidade'] == "";
                  $_SESSION['tabela'] == "";
                }
              }

                elseif ($_SESSION['quantidade'] == "um" and $_SESSION['tabela'] == 'exemplar'){
                  if (isset($_SESSION)) {
                    foreach ($_SESSION as $linha_exemplar => $value){
                      echo '<tr>';
                      foreach ($_SESSION[$linha_exemplar] as $campo) {
                        echo '<td>' . $campo . '</td>';
                      };
                      echo '<tr>';
                    }
                    $_SESSION['quantidade'] == "";
                    $_SESSION['tabela'] == "";
                  }
                    
                  }
                }
            
              
                  ?>   
                  <br>
        </div>
        
        </table>

        <form action="php/controlConsultar.php" method="POST">
                    <button type="submit" class="btn btn-primary" name="acao" value="novaConsulta">Limpar</button>
                  </form>
        </div>
