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
    if($acao == "deletarLivro"){
        if(isset($codLivroDeletarLivro)){
            $codLivroDeletarLivro = htmlspecialchars_decode(strip_tags($codLivroDeletarLivro));
            if(deletarLivro($codLivroDeletarLivro)){
                $_SESSION['msg'] = "<br>" . "Exclusão feita com sucesso! " . "\n";
            }
            else{
                $_SESSION['msg'] = "<br>" . "Exclusão falhou! " . "\n";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");

    }
    if($acao == "deletarBiblioteca"){
        if(isset($codBibliotecaDeletarBiblioteca)){
            $codBibliotecaDeletarBiblioteca = htmlspecialchars_decode(strip_tags($codBibliotecaDeletarBiblioteca));
            if(deletarBiblioteca($codBibliotecaDeletarBiblioteca)){
                $_SESSION['msg'] = "<br>" . "Exclusão feita com sucesso! " . "\n";
            }
            else{
                $_SESSION['msg'] = "<br>" . "Exclusão falhou! " . "\n";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }
    if($acao == "deletarAutor"){
        if(isset($codAutorDeletarAutor)){
            $codAutorDeletarAutor = htmlspecialchars_decode(strip_tags($codAutorDeletarAutor));
            if(deletarAutor($codAutorDeletarAutor)){
                $_SESSION['msg'] = "<br>" . "Exclusão feita com sucesso! " . "\n";
            }
            else{
                $_SESSION['msg'] = "<br>" . "Exclusão falhou! " . "\n";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "deletarUsuario"){
        if(isset($loginUsuarioDeletarUsuario)){
            $loginUsuarioDeletarUsuario = htmlspecialchars_decode(strip_tags($loginUsuarioDeletarUsuario));
            if(deletarUsuario($loginUsuarioDeletarUsuario)){
                $_SESSION['msg'] = "<br>" . "Exclusão feita com sucesso! " . "\n";
            }
            else{
                $_SESSION['msg'] = "<br>" . "Exclusão falhou! " . "\n";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "deletarExemplar"){
        if(isset($codExemplarDeletarExemplar)){
            $codExemplarDeletarExemplar = htmlspecialchars_decode(strip_tags($codExemplarDeletarExemplar));
            if(deletarValorExemplar($codExemplarDeletarExemplar)){
                $_SESSION['msg'] = "<br>". "Exclusão feita com sucesso!". "\n";
            }
            else{
                $_SESSION['msg'] = "<br>". "Exclusão falhou!". "\n";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }
}