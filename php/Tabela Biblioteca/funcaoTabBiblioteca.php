<?php
/* ---------------------------------------- função de conexão com o banco ---------------------------------------- */

include_once('funcaoConectarBancoBiblioteca.php');

/* ---------------------------------------- função incluir ---------------------------------------- */

function inserirBiblioteca($codBiblioteca, $enderecoBiblioteca, $nomeBiblioteca){

    if (is_numeric($codBiblioteca) && is_string($enderecoBiblioteca) && is_string($nomeBiblioteca)) {
        # code...
        $c = conectarBancoBiblioteca();

        $sql = "INSERT INTO biblioteca(codBiblioteca,enderecoBiblioteca,nomeBiblioteca) 
                            VALUES ('$codBiblioteca','$enderecoBiblioteca','$nomeBiblioteca')";

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

/* ---------------------------------------- função consultar biblioteca ---------------------------------------- */

function consultarBiblioteca(){
    $c = conectarBancoBiblioteca();
    $sql = "SELECT * from biblioteca";
    $query = mysqli_query($c,$sql);
    return $query;
}

/* ---------------------------------------- função consultar biblioteca pela chave ---------------------------------------- */

function consultarBibliotecaChave($valorChave){ # passando pelo comum de uma chave geralmente utilizar de um código (numeric):
    if (is_numeric($valorChave)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "SELECT * from biblioteca WHERE codBiblioteca = '$valorChave'";
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

/* --------------------------------------- função consultar biblioteca pela não chave (nomeBiblioteca) --------------------------------------- */

function consultarBibliotecaNome($nomeBiblioteca){
    if (is_string($nomeBiblioteca)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql  = "SELECT * FROM biblioteca WHERE nomeBiblioteca = '$nomeBiblioteca'";
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

/* ------------------------------------- função consultar biblioteca pela não chave (enderecoBiblioteca) ------------------------------------- */

function consultarBibliotecaEndereco($enderecoBiblioteca){
    if (is_string($enderecoBiblioteca)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql  = "SELECT * FROM biblioteca WHERE enderecoBiblioteca = '$enderecoBiblioteca'";
        $query = mysqli_query($c,$sql);
        $qtdLinhas = mysqli_num_rows($query);
        if ($qtdLinhas == 0) {
            # code...
            $msg = mysqli_error($c);
            echo "\n" . "Não foi encontrado nenhum registro com o parâmetro fornecido, por favor verifique o valor. " . "\n" . $msg . "\n";
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

/* ---------------------------------------- função alterar nome via chave ---------------------------------------- */

function alterarNomeBiblioteca($valorNovo,$valorConsulta){ # altera o nome da biblioteca a partir do código
    if (is_string($valorNovo) && is_numeric($valorConsulta)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "UPDATE biblioteca SET nomeBiblioteca = '$valorNovo' WHERE codBiblioteca = '$valorConsulta';";

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

/* ---------------------------------------- função alterar endereco via chave ---------------------------------------- */

function alterarEnderecoBiblioteca($valorNovo,$valorConsulta){ # altera o nome da biblioteca a partir do código
    if (is_string($valorNovo) && is_numeric($valorConsulta)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "UPDATE biblioteca SET enderecoBiblioteca = '$valorNovo' WHERE codBiblioteca = '$valorConsulta';";

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

function deletarBiblioteca($valorColuna){ # passando pelo comum de uma chave geralmente utilizar de um código (numeric):
    if (is_numeric($valorColuna)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "DELETE FROM biblioteca WHERE codBiblioteca = '$valorColuna'";
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