<?php

include_once('Tabela Autor/funcaoTabAutor.php');
include_once('Tabela Biblioteca/funcaoTabBiblioteca.php');
include_once('funcaoConectarBancoBiblioteca.php');
include_once('Tabela Livro/funcaoTabLivro.php');
include_once('Tabela Usuario/funcaoTabUsuario.php');
include_once('Tabela Exemplar/funcaoTabExemplar.php');
session_start();

extract($_REQUEST,EXTR_SKIP);

if (isset($acao)) {
    # code...
    if ($acao == "inserirLivro") {
        # code...
        if(isset($codLivroInserirLivro) && isset($codAutorInserirLivro) && isset($codBibliotecaInserirLivro) && isset($nomeLivroInserirLivro) && isset($numPaginasInserirLivro) && isset($generoInserirLivro) && isset($editoraInserirLivro) && isset($classificacaoInserirLivro)){
            $codLivroInserirLivro = htmlspecialchars_decode(strip_tags($codLivroInserirLivro));
            $codAutorInserirLivro = htmlspecialchars_decode(strip_tags($codAutorInserirLivro));
            $codBibliotecaInserirLivro = htmlspecialchars_decode(strip_tags($codBibliotecaInserirLivro));
            $nomeLivroInserirLivro = htmlspecialchars_decode(strip_tags($nomeLivroInserirLivro));
            $numPaginasInserirLivro = htmlspecialchars_decode(strip_tags($numPaginasInserirLivro));
            $generoInserirLivro = htmlspecialchars_decode(strip_tags($generoInserirLivro));
            $editoraInserirLivro = htmlspecialchars_decode(strip_tags($editoraInserirLivro));
            $classificacaoInserirLivro = htmlspecialchars_decode(strip_tags($classificacaoInserirLivro));

            if (inserirLivro($codLivroInserirLivro,$codAutorInserirLivro,$codBibliotecaInserirLivro,$nomeLivroInserirLivro,$numPaginasInserirLivro,$generoInserirLivro,$editoraInserirLivro,$classificacaoInserirLivro)) {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Inserção feita com sucesso" . "<br>";
            }
            else {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Inserção mal sucedida" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if ($acao == "inserirAutor") {
        # code...
        if(isset($codAutorInserirAutor) && isset($nomeAutorInserirAutor) && isset($dataAutorInserirAutor) && isset($paisAutorInserirAutor)){
            $codAutorInserirAutor = htmlspecialchars_decode(strip_tags($codAutorInserirAutor));
            $nomeAutorInserirAutor = htmlspecialchars_decode(strip_tags($nomeAutorInserirAutor));
            $dataAutorInserirAutor = htmlspecialchars_decode(strip_tags($dataAutorInserirAutor));
            $paisAutorInserirAutor = htmlspecialchars_decode(strip_tags($paisAutorInserirAutor));

            if (!validar_data($dataAutorInserirAutor)) {
                # code...
                $_SESSION['msg'] = "Data informada é inválida !!" . "<br>";
            }
            else{
                if (inserirAutor($codAutorInserirAutor,$nomeAutorInserirAutor,$dataAutorInserirAutor,$paisAutorInserirAutor)) {
                    # code...
                    $_SESSION['msg'] = "<br>" . "\n" . "Inserção feita com sucesso" . "<br>";
                }
                else {
                    # code...
                    $_SESSION['msg'] = "<br>" . "\n" . "Inserção mal sucedida" . "<br>";
                }
            }
            $path = $_SERVER['HTTP_REFERER'];
            header("Location: $path");
            
        }
    }

    if ($acao == "inserirBiblioteca") {
        # code...
        if(isset($codBibliotecaInserirBiblioteca) && isset($nomeBibliotecaInserirBiblioteca) && isset($enderecoBibliotecaInserirBiblioteca)){
            $codBibliotecaInserirBiblioteca = htmlspecialchars_decode(strip_tags($codBibliotecaInserirBiblioteca));
            $nomeBibliotecaInserirBiblioteca = htmlspecialchars_decode(strip_tags($nomeBibliotecaInserirBiblioteca));
            $enderecoBibliotecaInserirBiblioteca = htmlspecialchars_decode(strip_tags($enderecoBibliotecaInserirBiblioteca));

            if (inserirBiblioteca($codBibliotecaInserirBiblioteca,$enderecoBibliotecaInserirBiblioteca,$nomeBibliotecaInserirBiblioteca)) {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Inserção feita com sucesso" . "<br>";
            }
            else {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Inserção mal sucedida" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "incluirUsuario"){
        if (isset($loginUsuarioIncluir) && isset($senhaUsuarioIncluirConfirmar) && isset($senhaUsuarioIncluir)){
            $loginUsuarioAlterar = htmlspecialchars_decode(strip_tags($loginUsuarioIncluir));
            $senhaUsuarioIncluirConfirmar = htmlspecialchars_decode(strip_tags($senhaUsuarioIncluirConfirmar));
            $senhaUsuarioIncluir = htmlspecialchars_decode(strip_tags($senhaUsuarioIncluir));

            if($senhaUsuarioIncluir == $senhaUsuarioIncluirConfirmar){
                if(incluirUsuario($loginUsuarioIncluir,$senhaUsuarioIncluir)){
                    $_SESSION['msg'] = "<br>" . "\n" . "Inserção feita com sucesso" . "<br>";
                    header('Location: '. '../index.html');  # redireciona direto para a pagina de login, sem contagem nem nada, só redireciona
                }
                else {
                    # code...
                    $_SESSION['msg'] = "<br>" . "\n" . "Inserção mal sucedida" . "<br>";
                }
            }
            else{
                $_SESSION['msg'] = "<br>" . "\n" . "Inserção mal sucedida, confirme sua senha de forma correta!" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if ($acao == "incluirExemplar") {
        # code ... 
        if(isset($codExemplarIncluirExemplar) && isset($codLivroIncluirExemplar) && isset($valorExemplarIncluirExemplar)){
        $codExemplarIncluirExemplar = htmlspecialchars_decode(strip_tags($codExemplarIncluirExemplar));
        $codLivroIncluirExemplar = htmlspecialchars_decode(strip_tags($codLivroIncluirExemplar));
        $valorExemplarIncluirExemplar = htmlspecialchars_decode(strip_tags($valorExemplarIncluirExemplar));

        if(incluirExemplar($codExemplarIncluirExemplar,$codLivroIncluirExemplar,$valorExemplarIncluirExemplar)){
        # code ... 
            # code... 
            $_SESSION['msg'] = "<br>". "\n". "Inserção feita com sucesso!". "<br>";
        }
        else{
            # code ... 
            $_SESSION['msg'] = "<br>". "\n". "Inserção mal sucedida". "<br>";
        }
        }
        $path = $_SERVER['HTTP_REFERER'];
            header("Location: $path");
    }
    
}