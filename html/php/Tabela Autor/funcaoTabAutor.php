<?php
/* ---------------------------------------- função de conexão com o banco ---------------------------------------- */

include_once('funcaoConectarBancoBiblioteca.php');

/* ---------------------------------------- função incluir ---------------------------------------- */

function inserirAutor($codAutor, $nomeAutor, $nascimentoAutor,$paisAutor){

    if (is_numeric($codAutor) && is_string($nomeAutor) && is_string($paisAutor) && validar_data($nascimentoAutor)) {
        # code...
        $c = conectarBancoBiblioteca();
        $nascimentoAutor = formatardataBancoEnvio($nascimentoAutor);

        $sql = "INSERT INTO autor(codAutor,nomeAutor,nascimentoAutor,paisAutor) 
                            VALUES ('$codAutor', '$nomeAutor', '$nascimentoAutor', '$paisAutor')";

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

/* ---------------------------------------- função consultar autor ---------------------------------------- */

function consultarAutor(){
    $c = conectarBancoBiblioteca();
    $sql = "SELECT * from autor";
    $query = mysqli_query($c,$sql);
    return $query;
}

/* ---------------------------------------- função consultar autor pela chave ---------------------------------------- */

function consultarAutorChave($valorChave){ # passando pelo comum de uma chave geralmente utilizar de um código (numeric):
    if (is_numeric($valorChave)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "SELECT * from autor WHERE codAutor = '$valorChave'";
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

/* ---------------------------------------- função consultar autor pelo nome ---------------------------------------- */

function consultarNomeAutor($valorColuna){
    if (is_string($valorColuna)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql  = "SELECT * FROM autor WHERE nomeAutor = '$valorColuna'";
        $query = mysqli_query($c,$sql);
        $qtdLinhas = mysqli_num_rows($query);
        if ($qtdLinhas == 0) {
            # code...
            echo "\n" . "não existe registro com esse código!" . "\n";
            return false;
        }
        else{
            return $query;
        }
    }
    else{
        echo "\n" . "Parametros fornecidos são do tipo incorreto" . "\n";
        return false;
    }
}

/* ---------------------------------------- função consultar autor pelo país ---------------------------------------- */

function consultarPaisAutor($valorColuna){
    if (is_string($valorColuna)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql  = "SELECT * FROM autor WHERE paisAutor = '$valorColuna'";
        $query = mysqli_query($c,$sql);
        $qtdLinhas = mysqli_num_rows($query);
        if ($qtdLinhas == 0) {
            # code...
            echo "\n" . "não existe registro com esse código!" . "\n";
            return false;
        }
        else{
            return $query;
        }
    }
    else{
        echo "\n" . "Parametros fornecidos são do tipo incorreto" . "\n";
        return false;
    }
}

/* ---------------------------------------- função alterar nome via chave ---------------------------------------- */

function alterarNomeAutor($valorNovo,$codAutor){ # altera o nome da biblioteca a partir do código
    if (is_string($valorNovo) && is_numeric($codAutor)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "UPDATE autor SET nomeAutor = '$valorNovo' WHERE codAutor = '$codAutor';";

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
        echo "<br>" . "\n" . "Parametros inválidos";
        return False;
    }
    
}

/* ---------------------------------------- função alterar País via chave ---------------------------------------- */

function alterarPaisAutor($valorNovo,$codAutor){ # altera o nome da biblioteca a partir do código
    if (is_string($valorNovo) && is_numeric($codAutor)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "UPDATE autor SET paisAutor = '$valorNovo' WHERE codAutor = '$codAutor';";

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
        echo "<br>" . "\n" . "Parametros inválidos";
        return False;
    }
    
}

/* ---------------------------------------- função alterar Data via chave ---------------------------------------- */

function alterarDataAutor($valorNovo,$valorConsulta){ # altera o nome da biblioteca a partir do código
    if (is_string($valorConsulta) && validar_data($valorNovo)) {
        # code...
        $c = conectarBancoBiblioteca();
        $valorNovo = formatardataBancoEnvio($valorNovo);
        $sql = "UPDATE autor SET nascimentoAutor = '$valorNovo' WHERE codAutor = '$valorConsulta';";

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
        echo "<br>" . "\n" . "Parametros inválidos";
        return False;
    }
    
}

/* ---------------------------------------- função deletar via código ---------------------------------------- */

function deletarAutor($valorColuna){ # passando pelo comum de uma chave geralmente utilizar de um código (numeric):
    if (is_numeric($valorColuna)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "DELETE FROM autor WHERE codAutor = '$valorColuna'";
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

/* ---------------------------------------- funções de manipulação de data ---------------------------------------- */

function validar_data($data)
{
    $v = explode("/", $data);
    if (count($v) == 3) {
        $result = checkdate($v[1], $v[0], $v[2]);
        return $result;
    }
}

function formatardataBancoEnvio($data)
{
    $v = explode("/", $data);
    $dataBanco = $v[2] . '-' . $v[1] . '-' . $v[0];
    return $dataBanco;
}

function formatardataTela($data)
{
    $v = explode('-', $data);
    $dataTela = $v[2] . '/' . $v[1] . '/' . $v[0];
    return $dataTela;
}
?>