<?php

include_once('Tabela Autor/funcaoTabAutor.php');
include_once('Tabela Biblioteca/funcaoTabBiblioteca.php');
include_once('funcaoConectarBancoBiblioteca.php');
include_once('Tabela Livro/funcaoTabLivro.php');
include_once('Tabela Exemplar/funcaoTabExemplar.php');
include_once('Tabela Usuario/funcaoTabUsuario.php');

extract($_REQUEST,EXTR_SKIP);

if(isset($acao)){
    if($acao == "consultarTudoLivro"){
        $consulta = consultarLivro();
        $qtdLinhas = mysqli_num_rows($consulta);

        for ($i=0; $i < $qtdLinhas; $i++) { 
            # code...
            $linha = mysqli_fetch_assoc($consulta);
            echo "<br>" . "Código do Livro: " . $linha['codlivro'].
            "<br>" . "Código do Autor " . $linha['codAutor'] .
            "<br>" . "Código da Biblioteca " . $linha['codBiblioteca'] . 
            "<br>" . "Nome: " . $linha['nomeLivro'] .
            "<br>" . "Número de páginas: " . $linha['numPaginas'] .
            "<br>" . "Gênero: " . $linha['genero'] . 
            "<br>" . "Editora: " . $linha['editora'] . 
            "<br>" . "Classificação de idade: " . $linha['classificacaoIdade'] . "<br>" . "<br>";

            
        }
    }

    if($acao == "consultarLivroCodigo"){
        if(isset($codLivroConsultar)){
            $codLivroConsultar = htmlspecialchars_decode(strip_tags($codLivroConsultar));
            $consulta = consultarLivroChave($codLivroConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            for ($i=0; $i < $qtdLinhas; $i++) { 
                # code...
                $linha = mysqli_fetch_assoc($consulta);
                echo "<br>" . "Código do Livro: " . $linha['codlivro'].
                "<br>" . "Código do Autor " . $linha['codAutor'] .
                "<br>" . "Código da Biblioteca " . $linha['codBiblioteca'] . 
                "<br>" . "Nome: " . $linha['nomeLivro'] .
                "<br>" . "Número de páginas: " . $linha['numPaginas'] .
                "<br>" . "Gênero: " . $linha['genero'] . 
                "<br>" . "Editora: " . $linha['editora'] . 
                "<br>" . "Classificação de idade: " . $linha['classificacaoIdade'] . "<br>" . "<br>";

            
            }
        }
    }

    if($acao == "consultarLivroNome"){
        if(isset($nomeLivroConsultar)){
            $nomeLivroConsultar = htmlspecialchars_decode(strip_tags($nomeLivroConsultar));
            $consulta = consultarNomeLivro($nomeLivroConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            for ($i=0; $i < $qtdLinhas; $i++) { 
                # code...
                $linha = mysqli_fetch_assoc($consulta);
                echo "<br>" . "Código do Livro: " . $linha['codlivro'].
                "<br>" . "Código do Autor " . $linha['codAutor'] .
                "<br>" . "Código da Biblioteca " . $linha['codBiblioteca'] . 
                "<br>" . "Nome: " . $linha['nomeLivro'] .
                "<br>" . "Número de páginas: " . $linha['numPaginas'] .
                "<br>" . "Gênero: " . $linha['genero'] . 
                "<br>" . "Editora: " . $linha['editora'] . 
                "<br>" . "Classificação de idade: " . $linha['classificacaoIdade'] . "<br>" . "<br>";

            
            }
        }
    }

    if($acao == "consultarTudoAutor"){
        $consulta = consultarAutor();
        $qtdLinhas = mysqli_num_rows($consulta);

        for ($i=0; $i < $qtdLinhas; $i++) { 
            # code...
            $linha = mysqli_fetch_assoc($consulta);
            echo "<br>" . "Código do Autor: " . $linha['codAutor'].
                "<br>" . "Nome: " . $linha['nomeAutor'] .
                "<br>" . "Data de Nascimento " . formatarDataTela($linha['nascimentoAutor']) . 
                "<br>" . "País de Naturalidade: " . $linha['paisAutor'] . "<br>" . "<br>";
        }
    }

    if($acao == "consultarAutorCodigo"){
        if(isset($codAutorConsultar)){
            $codAutorConsultar = htmlspecialchars_decode(strip_tags($codAutorConsultar));
            $consulta = consultarAutorChave($codAutorConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            for ($i=0; $i < $qtdLinhas; $i++) { 
                # code...
                $linha = mysqli_fetch_assoc($consulta);
                echo "<br>" . "Código do Autor: " . $linha['codAutor'].
                "<br>" . "Nome: " . $linha['nomeAutor'] .
                "<br>" . "Data de Nascimento " . formatarDataTela($linha['nascimentoAutor']) . 
                "<br>" . "País de Naturalidade: " . $linha['paisAutor'] . "<br>" . "<br>";
            }
        }
    }

    if($acao == "consultarAutorNome"){
        if(isset($nomeAutorConsultar)){
            $nomeAutorConsultar = htmlspecialchars_decode(strip_tags($nomeAutorConsultar));
            $consulta = consultarNomeAutor($nomeAutorConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            for ($i=0; $i < $qtdLinhas; $i++) { 
                # code...
                $linha = mysqli_fetch_assoc($consulta);
                echo "<br>" . "Código do Autor: " . $linha['codAutor'].
                "<br>" . "Nome: " . $linha['nomeAutor'] .
                "<br>" . "Data de Nascimento " . formatarDataTela($linha['nascimentoAutor']) . 
                "<br>" . "País de Naturalidade: " . $linha['paisAutor'] . "<br>" . "<br>";
            }
        }
    }

    if($acao == "consultarTudoBiblioteca"){
        $consulta = consultarBiblioteca();
        $qtdLinhas = mysqli_num_rows($consulta);

        for ($i=0; $i < $qtdLinhas; $i++) { 
            # code...
            $linha = mysqli_fetch_assoc($consulta);
            echo "<br>" . "Código da Biblioteca: " . $linha['codBiblioteca'].
                "<br>" . "Nome: " . $linha['nomeBiblioteca'] .
                "<br>" . "Endereço: " . $linha['enderecoBiblioteca'] . "<br>";
        }
    }

    if($acao == "consultarBibliotecaCodigo"){
        if(isset($codBibliotecaConsultar)){
            $codBibliotecaConsultar = htmlspecialchars_decode(strip_tags($codBibliotecaConsultar));
            $consulta = consultarBibliotecaChave($codBibliotecaConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            for ($i=0; $i < $qtdLinhas; $i++) { 
                # code...
                $linha = mysqli_fetch_assoc($consulta);
                echo "<br>" . "Código da Biblioteca: " . $linha['codBiblioteca'].
                "<br>" . "Nome: " . $linha['nomeBiblioteca'] .
                "<br>" . "Endereço: " . $linha['enderecoBiblioteca'] . "<br>";
            }
        }
    }

    if($acao == "consultarBibliotecaNome"){
        if(isset($nomeBibliotecaConsultar)){
            $nomeBibliotecaConsultar = htmlspecialchars_decode(strip_tags($nomeBibliotecaConsultar));
            $consulta = consultarBibliotecaNome($nomeBibliotecaConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            for ($i=0; $i < $qtdLinhas; $i++) { 
                # code...
                $linha = mysqli_fetch_assoc($consulta);
                echo "<br>" . "Código da Biblioteca: " . $linha['codBiblioteca'].
                "<br>" . "Nome: " . $linha['nomeBiblioteca'] .
                "<br>" . "Endereço: " . $linha['enderecoBiblioteca'] . "<br>";
            }
        }
    }


    if($acao == "consultarTudoUsuario"){
        $consulta = consultarUsuario();
        $qtdLinhas = mysqli_num_rows($consulta);

        for ($i=0; $i < $qtdLinhas; $i++) { 
            # code...
            $linha = mysqli_fetch_assoc($consulta);
            echo "<br>" . "Login: " . $linha['login'].
                "<br>" . "Senha: " . $linha['senha'] .
                "<br>";
        }
    }

    if($acao == "consultarUsuarioLogin"){
        if(isset($loginUsuarioConsultar)){
            $loginUsuarioConsultar = htmlspecialchars_decode(strip_tags($loginUsuarioConsultar));
            $consulta = consultarUsuarioLogin($loginUsuarioConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            for ($i=0; $i < $qtdLinhas; $i++) { 
                # code...
                $linha = mysqli_fetch_assoc($consulta);
                echo "<br>" . "Login: " . $linha['login'].
                    "<br>" . "Senha: " . $linha['senha'] .
                    "<br>";
            }
        }
        
    }

    if($acao == "consultarTudoExemplar"){
        $consulta = consultarExemplar();
        $qtdLinhas = mysqli_num_rows($consulta);
        for($i = 0; $i <$qtdLinhas; $i++) {
            # code ... 
            $linha = mysqli_fetch_assoc($consulta);
            echo "<br>". "Código do Exemplar". $linha['codExemplar'].
            "<br>". "Valor do Exemplar". $linha['valorExemplar'];
        }
    }
  
    if($acao == "consultarExemplarCodigo"){
        if(isset($codExemplarConsultar)){
            $consulta = consultarExemplarChave($codExemplarConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            for ($i=0; $i < $qtdLinhas; $i++) { 
                # code...
                $linha = mysqli_fetch_assoc($consulta);
                echo "<br>" . "Código do Exemplar: " . $linha['codExemplar'].
                "<br>" . "Valor do Exemplar" . $linha['valorExemplar']. "<br>";
            }
        }
    }
}

