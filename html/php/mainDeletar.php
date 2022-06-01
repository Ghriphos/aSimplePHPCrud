<?php

include_once('Tabela Autor/funcaoTabAutor.php');
include_once('Tabela Biblioteca/funcaoTabBiblioteca.php');
include_once('funcaoConectarBancoBiblioteca.php');
include_once('Tabela Livro/funcaoTabLivro.php');
include_once('Tabela Exemplar/funcaoTabExemplar.php');
include_once('Tabela Usuario/funcaoTabUsuario.php');

extract($_REQUEST,EXTR_SKIP);

if(isset($acao)){
    if($acao == "deletarLivro"){
        if(isset($codLivroDeletarLivro)){
            $codLivroDeletarLivro = htmlspecialchars_decode(strip_tags($codLivroDeletarLivro));
            if(deletarLivro($codLivroDeletarLivro)){
                echo "<br>" . "Exclusão feita com sucesso! " . "\n";
            }
            else{
                echo "<br>" . "Exclusão falhou! " . "\n";
            }
        }
    }
    if($acao == "deletarBiblioteca"){
        if(isset($codBibliotecaDeletarBiblioteca)){
            $codBibliotecaDeletarBiblioteca = htmlspecialchars_decode(strip_tags($codBibliotecaDeletarBiblioteca));
            if(deletarBiblioteca($codBibliotecaDeletarBiblioteca)){
                echo "<br>" . "Exclusão feita com sucesso! " . "\n";
            }
            else{
                echo "<br>" . "Exclusão falhou! " . "\n";
            }
        }
    }
    if($acao == "deletarAutor"){
        if(isset($codAutorDeletarAutor)){
            $codAutorDeletarAutor = htmlspecialchars_decode(strip_tags($codAutorDeletarAutor));
            if(deletarAutor($codAutorDeletarAutor)){
                echo "<br>" . "Exclusão feita com sucesso! " . "\n";
            }
            else{
                echo "<br>" . "Exclusão falhou! " . "\n";
            }
        }
    }

    if($acao == "deletarUsuario"){
        if(isset($loginUsuarioDeletarUsuario)){
            $loginUsuarioDeletarUsuario = htmlspecialchars_decode(strip_tags($loginUsuarioDeletarUsuario));
            if(deletarUsuario($loginUsuarioDeletarUsuario)){
                echo "<br>" . "Exclusão feita com sucesso! " . "\n";
            }
            else{
                echo "<br>" . "Exclusão falhou! " . "\n";
            }
        }
    }

    if($acao == "deletarExemplar"){
        if(isset($codExemplarDeletarExemplar)){
            $codExemplarDeletarExemplar = htmlspecialchars_decode(strip_tags($codExemplarDeletarExemplar));
            if(deletarValorExemplar($codExemplarDeletarExemplar)){
                echo "<br>". "Exclusão feita com sucesso!". "\n";
            }
            else{
                echo "<br>". "Exclusão falhou!". "\n";
            }
        }
    }
}