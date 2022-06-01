<?php
/* ---------------------------------------- função de conexão com o banco ---------------------------------------- */

include_once('funcaoConectarBancoBiblioteca.php');

/* ---------------------------------------- função incluir ---------------------------------------- */

function inserirLivro ($codlivro, $codAutor, $codBiblioteca , $nomeLivro, $numPaginas, $genero , $editora , $classificacaoIdade){

    if (is_numeric($codlivro) && is_numeric($codAutor) && is_numeric($codBiblioteca) && is_string ($nomeLivro) && is_numeric ($numPaginas) && is_string ($genero) && is_string ($editora) && is_numeric ($classificacaoIdade)) {
        # code...
        $c = conectarBancoBiblioteca();

        $sql = "INSERT INTO livro (`codlivro`,`codAutor`,`codBiblioteca`,`nomeLivro`,`numPaginas`,`genero`,`editora`,`classificacaoIdade`)
        values('$codlivro','$codAutor','$codBiblioteca','$nomeLivro','$numPaginas','$genero','$editora','$classificacaoIdade')";

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

/* ---------------------------------------- função consultar livro ---------------------------------------- */

function consultarLivro(){
    $c = conectarBancoBiblioteca();
    $sql = "SELECT * from livro";
    $query = mysqli_query($c,$sql);
    return $query;
}

/* ---------------------------------------- função consultar livro pela chave ---------------------------------------- */

function consultarLivroChave($valorChave){ # passando pelo comum de uma chave geralmente utilizar de um código (numeric):
    if (is_numeric($valorChave)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "SELECT * from livro WHERE codLivro = '$valorChave'";
        $query = mysqli_query($c,$sql);
        if (mysqli_num_rows($query) == 0) {
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
        echo "\n" . "Parametros inválidos";
        return False;
    }
}

/* ---------------------------------------- função consultar livro pelo nome ---------------------------------------- */

function consultarNomeLivro($valorChave){ # passando pelo comum de uma chave geralmente utilizar de um código (numeric):
    if (is_string($valorChave)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "SELECT * from livro WHERE nomeLivro = '$valorChave'";
        $query = mysqli_query($c,$sql);
        if (mysqli_num_rows($query) == 0) {
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
        echo "\n" . "Parametros inválidos";
        return False;
    }
}

/* ---------------------------------------- função consultar livro pelo genero ---------------------------------------- */

function consultarGeneroLivro($valorChave){ # passando pelo comum de uma chave geralmente utilizar de um código (numeric):
    if (is_string($valorChave)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "SELECT * from livro WHERE genero = '$valorChave'";
        $query = mysqli_query($c,$sql);
        if (mysqli_num_rows($query) == 0) {
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
        echo "\n" . "Parametros inválidos";
        return False;
    }
}

/* ---------------------------------------- função alterar nome pelo codigo ---------------------------------------- */

function alterarNomeLivro($valorNovo,$valorConsulta){ # altera o nome do livro a partir do código
    if (is_string($valorNovo) && is_numeric($valorConsulta)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "UPDATE livro SET nomeLivro = '$valorNovo' WHERE codLivro = '$valorConsulta';";

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

/* ---------------------------------------- função alterar livro pelo genero ---------------------------------------- */

function alterarGeneroLivro($valorNovo,$valorConsulta){ # altera o genero a partir do código
    if (is_string($valorNovo) && is_numeric($valorConsulta)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "UPDATE livro SET genero = '$valorNovo' WHERE codLivro = '$valorConsulta';";

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

/* ---------------------------------------- função alterar numero de paginas pelo codigo ---------------------------------------- */

function alterarNumPagLivro($valorNovo,$valorConsulta){ # altera o numero de paginas a partir do código
    if (is_numeric($valorNovo) && is_numeric($valorConsulta)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "UPDATE livro SET numPaginas = '$valorNovo' WHERE codLivro = '$valorConsulta';";

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

/* ---------------------------------------- função alterar editora pelo codigo ---------------------------------------- */

function alterarEditoraLivro($valorNovo,$valorConsulta){ # altera a editora a partir do código
    if (is_string($valorNovo) && is_numeric($valorConsulta)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "UPDATE livro SET editora = '$valorNovo' WHERE codLivro = '$valorConsulta';";

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

/* ---------------------------------------- função alterar classificação pelo codigo ---------------------------------------- */

function alterarClassificacaoLivro($valorNovo,$valorConsulta){ # altera a editora a partir do código
    if (is_numeric($valorNovo) && is_numeric($valorConsulta)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "UPDATE livro SET classificacaoIdade = '$valorNovo' WHERE codLivro = '$valorConsulta';";

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

function deletarLivro($valorColuna){ # passando pelo comum de uma chave geralmente utilizar de um código (numeric):
    if (is_numeric($valorColuna)) {
        # code...
        $c = conectarBancoBiblioteca();
        $sql = "DELETE FROM livro WHERE codLivro = '$valorColuna'";
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