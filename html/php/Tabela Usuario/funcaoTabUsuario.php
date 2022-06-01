<?php
/* ---------------------------------------- função de conexão com o banco ---------------------------------------- */

include_once('funcaoConectarBancoBiblioteca.php');

/* ---------------------------------------- função login ---------------------------------------- */

function logarUsuario($login,$senha){ 
    if (is_string($login) && is_numeric($senha)) { # deixei as senhas como INT
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha';";
        $query = mysqli_query($c,$sql);
        if (mysqli_num_rows($query) == 0) {
            # code...
            return False;
        }
        else {
            # code...
            return True;
        }
    }
    else {
        echo "\n" . "Parâmetros inválidos! ";
        return false;
    }
}

/* ---------------------------------------- função incluir ---------------------------------------- */

function incluirUsuario($login,$senha){

    if (is_string($login) && is_numeric($senha)) {
        # code...
        $c = conectarBancoBiblioteca();

        $sql = "INSERT INTO usuario(login,senha) 
                            VALUES ('$login','$senha')";

        $query = mysqli_query($c,$sql);# abrindo query com mysqli_query e rodando a variavel de conexão e o comando sql
        if ($query == true) {
            # verificando se o query deu certo
            echo "\n" . "Inserção bem sucedida! ";
            return True;
        }
        else {
            $msg = mysqli_error($c);
            echo "\n" . "Inserção mal-sucedida " . $msg;
            return False;
        }
    }
    else {
        # code...
        echo "\n" . "Parametros inválidos";
        return False;
    }
   
}

/* ---------------------------------------- função alterar ---------------------------------------- */

function alterarSenhaUsuario($login,$senha){
    if (is_string($login) && is_numeric($senha)){
        $c = conectarBancoBiblioteca();
        $sql = "update usuario set senha = '$senha' where login = '$login'";
        mysqli_query($c,$sql);
        if (mysqli_affected_rows($c) == 0) {
            # code...
            $msg = mysqli_error($c);
            echo "<br>" . "\n" . "Não foi possível alterar as informações, por favor verifique os parâmetros fornecidos. " . $msg;
            return False;
        }
        else{
            echo "<br>" . "\n" . "Alteração bem sucedida! ";
            return True;
        }
    }
    else {
        # code...
        echo "\n" . "Parametros inválidos";
        return False;
    }
}


function consultarUsuario(){
    $c = conectarBancoBiblioteca();
    $sql = "SELECT * from usuario";
    $query = mysqli_query($c,$sql);
    return $query;
}

function consultarUsuarioLogin($valorChave){ 
    if (is_string($valorChave)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "SELECT * from usuario WHERE login = '$valorChave'";
        $query = mysqli_query($c,$sql);
        $qtdLinhas = mysqli_num_rows($query);
        if ($qtdLinhas == 0) {
            # não achou registro com aquele código
            echo "\n" . "não existe registro com esse código!" . "\n";
            return false;
        }
        else {
            #achou então retorna verdadeiro
            return $query;
        }
    }
    else{
        echo "\n" . "Parametros fornecidos são do tipo incorreto" . "\n";
        return false;
    }
}


function deletarUsuario($valorColuna){ # passando pelo comum de uma chave geralmente utilizar de um código (numeric):
    if (is_string($valorColuna)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "DELETE FROM usuario WHERE login = '$valorColuna'";
        mysqli_query($c,$sql);
        if (mysqli_affected_rows($c) == 0) {
            # code...
            $msg = mysqli_error($c);
            echo "<br>" . "\n" . "Não foi possível alterar as informações, por favor verifique os parâmetros fornecidos. " . $msg;
            return False;
        }
        else{
            echo "<br>" . "\n" . "Exclusão bem sucedida! ";
            return True;
        }
    }
    else{
        echo "\n" . "Parametros inválidos";
        return False;
    }
    
}


?>