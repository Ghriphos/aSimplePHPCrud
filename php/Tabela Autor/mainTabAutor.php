<?php
/* ---------------------------------------- teste função incluir ---------------------------------------- */

include_once('funcaoTabAutor.php');
$testeIncluirAutor = inserirAutor(3292,'Richard Neumann', '2005-07-30', 'Bélgica');

if ($testeIncluirAutor) {   
    # testa se a chamada da função retorna true
    echo "\n" . "Incluido feita com sucesso";
}
else {
    echo "\n" . "Inclusão mal sucedida";
}

/* ---------------------------------------- teste função consulta ---------------------------------------- */

include_once('funcaoTabAutor.php');
$testeConsultaAutor = consultarAutor();
print_r($testeConsultaAutor);

$qtdLinhas = mysqli_num_rows($testeConsultaAutor);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaAutor);
        print_r($linha);
        echo "\n" . "Código: " . $linha['codAutor'].
            "\n" . "Nome: " . $linha['nomeAutor'] .
            "\n" . "Nascimento: " . $linha['nascimentoAutor'] . 
            "\n" . "País: " . $linha['paisAutor'] . "\n";
}

/* ---------------------------------------- teste função consulta chave ---------------------------------------- */

include_once('funcaoTabAutor.php');
$testeConsultaAutorChave = consultarAutorChave(3292);
print_r($testeConsultaAutorChave);

$qtdLinhas = mysqli_num_rows($testeConsultaAutorChave);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaAutorChave);
        print_r($linha);
        echo "\n" . "Código: " . $linha['codAutor'].
        "\n" . "Nome: " . $linha['nomeAutor'] .
        "\n" . "Nascimento: " . $linha['nascimentoAutor'] . 
        "\n" . "País: " . $linha['paisAutor'] . "\n";
}

/* ---------------------------------------- teste função consulta pelo nome ---------------------------------------- */

include_once('funcaoTabAutor.php');
$testeConsultaNomeAutor = consultarNomeAutor('Richard Neumann');
print_r($testeConsultaNomeAutor);

$qtdLinhas = mysqli_num_rows($testeConsultaNomeAutor);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaNomeAutor);
        print_r($linha);
        echo "\n" . "Código: " . $linha['codAutor'].
        "\n" . "Nome: " . $linha['nomeAutor'] .
        "\n" . "Nascimento: " . $linha['nascimentoAutor'] . 
        "\n" . "País: " . $linha['paisAutor'] . "\n";
}

/* ---------------------------------------- teste função consulta pelo país ---------------------------------------- */

include_once('funcaoTabAutor.php');
$testeConsultaPaisAutor = consultarPaisAutor('México');
print_r($testeConsultaPaisAutor);

$qtdLinhas = mysqli_num_rows($testeConsultaPaisAutor);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaPaisAutor);
        print_r($linha);
        echo "\n" . "Código: " . $linha['codAutor'].
        "\n" . "Nome: " . $linha['nomeAutor'] .
        "\n" . "Nascimento: " . $linha['nascimentoAutor'] . 
        "\n" . "País: " . $linha['paisAutor'] . "\n";
}

/* ---------------------------------------- teste função alterar nome ---------------------------------------- */

include_once('funcaoTabAutor.php');
$testeAlterarAutor = alterarNomeAutor('Richard Neumann', 3292);

if($testeAlterarAutor){
    echo "\n" . "Alteração feita com sucesso";
}
else {
    # code...
    echo "\n" . "Alteração mal sucedida";
}

/* ---------------------------------------- teste função alterar nome ---------------------------------------- */

include_once('funcaoTabAutor.php');
$testeAlterarAutor = alterarNomeAutor('Bélgica', 3292);

if($testeAlterarAutor){
    echo "\n" . "Alteração feita com sucesso";
}
else {
    # code...
    echo "\n" . "Alteração mal sucedida";
}

/* ---------------------------------------- teste função deletar ---------------------------------------- */

include_once('funcaoTabAutor.php');
$testeDeletarAutor = deletarAutor(3292);
if($testeDeletarAutor == True){
    echo "\n" . "Delete feito com sucesso";
}
else {
    # code...
    echo "\n" . "Delete mal sucedido";
}
?>