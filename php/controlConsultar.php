<?php

include_once('Tabela Autor/funcaoTabAutor.php');
include_once('Tabela Biblioteca/funcaoTabBiblioteca.php');
include_once('funcaoConectarBancoBiblioteca.php');
include_once('Tabela Livro/funcaoTabLivro.php');
include_once('Tabela Exemplar/funcaoTabExemplar.php');
include_once('Tabela Usuario/funcaoTabUsuario.php');
session_start();

extract($_REQUEST,EXTR_SKIP);

if(isset($acao)){
    if($acao == "consultarTudoLivro"){
        $consulta = consultarLivro();
        $qtdLinhas = mysqli_num_rows($consulta);
        if ($qtdLinhas == 0) {
            # code...
            $_SESSION['msg'] = "Não existe registros  na tabela";
        }
        else{
            $_SESSION['quantidade'] = "tudo";
            $_SESSION['tabela'] = "livro";
            $_SESSION['lista_livro'] = array();
            for ($i=0; $i < $qtdLinhas; $i++) { 
                $_SESSION['lista_livro'] ['linha_livro'] = array();
                $linha = mysqli_fetch_assoc($consulta);
                $_SESSION['lista_livro'] [$i] ['codlivro'] = $linha['codlivro'];
                $_SESSION['lista_livro'] [$i] ['codAutor'] = $linha['codAutor'];
                $_SESSION['lista_livro'] [$i] ['codBiblioteca'] = $linha['codBiblioteca'];
                $_SESSION['lista_livro'] [$i] ['nomeLivro'] = $linha['nomeLivro'];
                $_SESSION['lista_livro'] [$i] ['numPaginas'] = $linha['numPaginas'];
                $_SESSION['lista_livro'] [$i] ['genero'] = $linha['genero'];
                $_SESSION['lista_livro'] [$i] ['editora'] = $linha['editora'];
                $_SESSION['lista_livro'] [$i] ['classificacaoIdade'] = $linha['classificacaoIdade'];
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "novaConsulta"){
        session_destroy();
        // header("Location: ". "../consultar.php");
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
        $_SESSION['tabela'] = "";
        $_SESSION['quantidade'] == "";
    }


    if($acao == "consultarLivroCodigo"){
        if(isset($codLivroConsultar)){
            $codLivroConsultar = htmlspecialchars_decode(strip_tags($codLivroConsultar));
            $consulta = consultarLivroChave($codLivroConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            if($qtdLinhas == 0){
                $_SESSION['msg'] = "Não existe registros nessa tabela";
            }
            else{
                $_SESSION['quantidade'] = "um";
                $_SESSION['tabela'] = "livro";
                $_SESSION ['linha_livro'] = array();
                $linha = mysqli_fetch_assoc($consulta);
                $_SESSION['lista_livro'] ['codlivro'] = $linha['codlivro'];
                $_SESSION['lista_livro'] ['codAutor'] = $linha['codAutor'];
                $_SESSION['lista_livro'] ['codBiblioteca'] = $linha['codBiblioteca'];
                $_SESSION['lista_livro'] ['nomeLivro'] = $linha['nomeLivro'];
                $_SESSION['lista_livro'] ['numPaginas'] = $linha['numPaginas'];
                $_SESSION['lista_livro'] ['genero'] = $linha['genero'];
                $_SESSION['lista_livro'] ['editora'] = $linha['editora'];
                $_SESSION['lista_livro'] ['classificacaoIdade'] = $linha['classificacaoIdade'];
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "consultarLivroNome"){
        if(isset($nomeLivroConsultar)){
            $nomeLivroConsultar = htmlspecialchars_decode(strip_tags($nomeLivroConsultar));
            $consulta = consultarNomeLivro($nomeLivroConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            for ($i=0; $i < $qtdLinhas; $i++) { 
                # code...
                $linha_autor = mysqli_fetch_assoc($consulta);
                $_SESSION['lista_livro'] ['codlivro'] = $linha['codlivro'];
                $_SESSION['lista_livro'] ['codAutor'] = $linha['codAutor'];
                $_SESSION['lista_livro'] ['codBiblioteca'] = $linha['codBiblioteca'];
                $_SESSION['lista_livro'] ['nomeLivro'] = $linha['nomeLivro'];
                $_SESSION['lista_livro'] ['numPaginas'] = $linha['numPaginas'];
                $_SESSION['lista_livro'] ['genero'] = $linha['genero'];
                $_SESSION['lista_livro'] ['editora'] = $linha['editora'];
                $_SESSION['lista_livro'] ['classificacaoIdade'] = $linha['classificacaoIdade'];
            
            }
        }
    }

    if($acao == "consultarTudoAutor"){
        $consulta = consultarAutor();
        $qtdLinhas = mysqli_num_rows($consulta);
        if ($qtdLinhas == 0) {
            # code...
            $_SESSION['msg'] = "Não existe registros  na tabela";
        }
        else{
            $_SESSION['quantidade'] = "tudo";
            $_SESSION['tabela'] = "autor";
            $_SESSION['lista_autor'] = array();
            for ($i=0; $i < $qtdLinhas; $i++) { 
                $_SESSION['lista_autor'] ['linha_autor'] = array();
                $linha = mysqli_fetch_assoc($consulta);
                $_SESSION['lista_autor'] [$i] ['codAutor'] = $linha['codAutor'];
                $_SESSION['lista_autor'] [$i] ['nomeAutor'] = $linha['nomeAutor'];
                $_SESSION['lista_autor'] [$i] ['nascimentoAutor'] = formatardataTela($linha['nascimentoAutor']);
                $_SESSION['lista_autor'] [$i] ['paisAutor'] = $linha['paisAutor'];
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "consultarAutorCodigo"){
        if(isset($codAutorConsultar)){
            $codAutorConsultar = htmlspecialchars_decode(strip_tags($codAutorConsultar));
            $consulta = consultarAutorChave($codAutorConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            if($qtdLinhas == 0){
                $_SESSION['msg'] = "Não existe registros nessa tabela";
            }
            else{
                $_SESSION['quantidade'] = "um";
                $_SESSION['tabela'] = "autor";
                $_SESSION ['linha_autor'] = array();
                $linha = mysqli_fetch_assoc($consulta);
                $_SESSION['lista_autor'] ['codAutor'] = $linha['codAutor'];
                $_SESSION['lista_autor'] ['nomeAutor'] = $linha['nomeAutor'];
                $_SESSION['lista_autor'] ['nascimentoAutor'] = formatardataTela($linha['nascimentoAutor']);
                $_SESSION['lista_autor'] ['paisAutor'] = $linha['paisAutor'];
                }
            }
            $path = $_SERVER['HTTP_REFERER'];
            header("Location: $path");
        }

    if($acao == "consultarAutorNome"){
        if(isset($nomeAutorConsultar)){
            $nomeAutorConsultar = htmlspecialchars_decode(strip_tags($nomeAutorConsultar));
            $consulta = consultarNomeAutor($nomeAutorConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            for ($i=0; $i < $qtdLinhas; $i++) { 
                # code...
                $linha = mysqli_fetch_assoc($consulta);
                $_SESSION ['lista_autor'] ['codAutor'] = $linha['codAutor'].
                $_SESSION ['lista_autor'] ['nomeAutor'] =$linha['nomeAutor'] .
                $_SESSION ['lista_autor'] ['nascimentoAutor'] = formatarDataTela($linha['nascimentoAutor']) . 
                $_SESSION ['lista_autor'] ['paisAutor']= $linha['paisAutor'];
            }
        }
    }
    if($acao == "consultarTudoBiblioteca"){
        $consulta = consultarBiblioteca();
        $qtdLinhas = mysqli_num_rows($consulta);
        if ($qtdLinhas == 0) {
            $SESSION['msg'] = "Não existe registros na tabela";

        }else{
        $_SESSION['lista_biblioteca'] = array();
        for ($i=0; $i < $qtdLinhas; $i++) { 
            # code...
            $_SESSION['lista_biblioteca'] ['linha_biblioteca'] = array();
            $linha = mysqli_fetch_assoc($consulta);
            $_SESSION ['tabela'] = "biblioteca";
            $_SESSION ['lista_biblioteca'] [$i] ['codBiblioteca'] = $linha['codBiblioteca'];
            $_SESSION ['lista_biblioteca'] [$i]['nomeBiblioteca'] = $linha['nomeBiblioteca'];
            $_SESSION ['lista_biblioteca'] [$i] ['enderecoBiblioteca'] = $linha['enderecoBiblioteca'];
        }
        }
    }        
    if (isset($acao)){
            if ($acao == "Nova Consulta"){
            session_destroy();
        }
    }
        
    
    
    if($acao == "consultarBibliotecaCodigo"){
        if(isset($codBibliotecaConsultar)){
            $codBibliotecaConsultar = htmlspecialchars_decode(strip_tags($codBibliotecaConsultar));
            $consulta = consultarBibliotecaChave($codBibliotecaConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);
            if($qtdLinhas == 0){
                $_SESSION['msg'] = "Não existe registros nessa tabela";
            }
            else{
              
               $_SESSION['quantidade'] = "um";
               $_SESSION ['tabela'] = "biblioteca";
               $_SESSION ['linha_biblioteca'] = array();
               $linha = mysqli_fetch_assoc($consulta);
               $_SESSION['lista_biblioteca'] ['codBiblioteca'] = $linha['codBiblioteca'];
               $_SESSION ['lista_biblioteca'] ['nomeBiblioteca'] = $linha['nomeBiblioteca'] .
               $_SESSION ['lista_biblioteca'] ['enderecoBiblioteca'] = $linha['enderecoBiblioteca'];
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "consultarBibliotecaNome"){
        if(isset($nomeBibliotecaConsultar)){
            $nomeBibliotecaConsultar = htmlspecialchars_decode(strip_tags($nomeBibliotecaConsultar));
            $consulta = consultarBibliotecaNome($nomeBibliotecaConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            for ($i=0; $i < $qtdLinhas; $i++) { 
                # code...
                $_SESSION ['tabela'] = "biblioteca";
                $_SESSION ['linha_biblioteca'] = array();
                $linha = mysqli_fetch_assoc($consulta);
                $_SESSION['lista_biblioteca'] ['codBiblioteca'] = $linha['codBiblioteca'].
                $_SESSION ['lista_biblioteca'] ['nomeBiblioteca'] = $linha['nomeBiblioteca'] .
                $_SESSION ['lista_biblioteca'] ['enderecoBiblioteca'] = $linha['enderecoBiblioteca'];
            }
        }
    }


    if($acao == "consultarTudoUsuario"){

        $consulta = consultarUsuario();
        $qtdLinhas = mysqli_num_rows($consulta);

        if ($qtdLinhas == 0) {
            $_SESSION['msg'] = "Não existe registros na tabela";
        }
        else{
            $_SESSION['quantidade'] = "tudo";
            $_SESSION['tabela'] = "usuario";
            $_SESSION['lista_usuario'] = array();
            for ($i==0; $i < $qtdLinhas; $i++){
            $_SESSION['lista_usuario'] ['linha_usuario'] = array();
            $linha = mysqli_fetch_assoc($consulta);
            $_SESSION['lista_usuario'] [$i] ['login'] = $linha['login'];
            $_SESSION['lista_usuario'] [$i] ['senha'] = $linha['senha'];
                
        }
    }
    $path = $_SERVER['HTTP_REFERER'];
    header("Location: $path");
}
if($acao == "novaConsulta"){
    session_destroy();
    // header("Location: ". "../consultar.php");
    $path = $_SERVER['HTTP_REFERER'];
    header("Location: $path");
    $_SESSION['tabela'] = "";
    $_SESSION['quantidade'] == "";
}

    if($acao == "consultarUsuarioLogin"){
        if(isset($loginUsuarioConsultar)){
            $loginUsuarioConsultar = htmlspecialchars_decode(strip_tags($loginUsuarioConsultar));
            $consulta = consultarUsuarioLogin($loginUsuarioConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);

            for ($i=0; $i < $qtdLinhas; $i++) { 
                # code...
                $linha = mysqli_fetch_assoc($consulta);
                $_SESSION ['lista_usuario'] [$i] ['login'] = $linha['login'];
                   
            }
        }
        
    }

    if($acao == "consultarTudoExemplar"){
        $consulta = consultarExemplar();
        $qtdLinhas = mysqli_num_rows($consulta);
        if ($qtdLinhas == 0){
            # code ... 
            $_SESSION['msg'] = "Não existe registros na tabela";
        }
        else{
            $_SESSION['quantidade'] = "tudo";
            $_SESSION['tabela'] = "exemplar";
            $_SESSION['lista_exemplar'] = array();
            for ($i=0; $i < $qtdLinhas; $i++) { 
                $_SESSION['lista_exemplar'] ['linha_exemplar'] = array();
                $linha = mysqli_fetch_assoc($consulta);
            $_SESSION['lista_exemplar'] [$i] ['codExemplar'] = $linha['codExemplar'].
            $_SESSION ['lista_exemplar'] [$i] ['valorExemplar']= $linha['valorExemplar'];
        }
    }
    $path = $_SERVER['HTTP_REFERER'];
    header("Location: $path");
}
if($acao == "novaConsulta"){
    session_destroy();
    // header("Location: ". "../consultar.php");
    $path = $_SERVER['HTTP_REFERER'];
    header("Location: $path");
    $_SESSION['tabela'] = "";
    $_SESSION['quantidade'] == "";
}
  
if($acao == "consultarExemplarCodigo"){
        if(isset($codExemplarConsultar)){
            $codExemplarConsultar = htmlspecialchars_decode(strip_tags($codExemplarConsultar));
            $consulta = consultarExemplarChave($codExemplarConsultar);
            $qtdLinhas = mysqli_num_rows($consulta);
            if($qtdLinhas == 0){
                $_SESSION['msg'] = "Não existe registros nessa tabela";
            }
            else{
            $_SESSION['quantidade'] = "um";
            $_SESSION['tabela'] = "exemplar";
            $_SESSION['linha_exemplar'] = array();
                # code...
                $linha = mysqli_fetch_assoc($consulta);
                $_SESSION['lista_exemplar'] ['codExemplar'] = $linha['codExemplar'];
                $_SESSION ['lista_exemplar'] ['valorExemplar'] = $linha['valorExemplar'];
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

$path = $_SERVER['HTTP_REFERER'];
    header("Location: $path");
}


