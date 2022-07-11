<?php
/* ---------------------------------------- função de conexão com o banco ---------------------------------------- */

include_once('funcaoConectarBancoBiblioteca.php');

/* ---------------------------------------- função incluir ---------------------------------------- */

function incluirExemplar($codExemplar, $codLivro, $valorExemplar){

    if (is_numeric($codExemplar) && is_numeric($codLivro) && is_numeric($valorExemplar)) {
        # code...
        $c = conectarBancoBiblioteca();

        $sql = "INSERT INTO exemplar(codExemplar,codLivro,valorExemplar) 
                            VALUES ('$codExemplar','$codLivro','$valorExemplar')";

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

/* ---------------------------------------- função consultar exemplares ---------------------------------------- */

function consultarExemplar(){
    $c = conectarBancoBiblioteca();
    $sql = "SELECT * from exemplar";
    $query = mysqli_query($c,$sql);
    return $query;
}

/* ---------------------------------------- função consultar exemplar pela chave ---------------------------------------- */

function consultarExemplarChave($valorChave){ # passando pelo comum de uma chave geralmente utilizar de um código (numeric):
    if (is_numeric($valorChave)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "SELECT * from exemplar WHERE codExemplar = '$valorChave'";
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
    else {
        # code...
        echo "\n" . "Parametros inválidos";
        return False;
    }
}

/* --------------------------------------- função consultar biblioteca pela não chave (valorExemplar) --------------------------------------- */

function consultarvalorExemplar($valorChave){
    if (is_numeric($valorChave)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql  = "SELECT * FROM exemplar WHERE valorExemplar = '$valorChave'";
        $query = mysqli_query($c,$sql);
        $qtdLinhas = mysqli_num_rows($query);
        if ($qtdLinhas == 0) {
            # code...
            echo "\n" . "Não foi encontrado nenhum registro com o parâmetro fornecido, por favor verifique o valor. " . "\n";
            return False;
        }
        else {
            # code...
            return $query;
        }
    }
    else {
        # code...
        echo "\n" . "Parametros fornecidos para a função 'consultarBibliotecaNome' incorretos, é esperado um valor do tipo String" . "\n";
        return false;
    }
}

/* ---------------------------------------- função alterar valor via chave ---------------------------------------- */

function alterarValorExemplarAlterar($valorNovo,$valorConsulta){ # altera o nome da biblioteca a partir do código
    if (is_numeric($valorNovo) && is_numeric($valorConsulta)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "UPDATE exemplar SET valorExemplar = '$valorNovo' WHERE codExemplar = '$valorConsulta';";

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
    else{
        echo "\n" . "Parametros inválidos";
        return False;
    }
    
}

/* ---------------------------------------- função deletar via código ---------------------------------------- */

function deletarValorExemplar($valorColuna){ # passando pelo comum de uma chave geralmente utilizar de um código (numeric):
    if (is_numeric($valorColuna)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "DELETE FROM exemplar WHERE codExemplar = '$valorColuna'";
        $query = mysqli_query($c,$sql);
        if ($query) {
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
    else{
        echo "\n" . "Parametros inválidos";
        return False;
    }
    
}