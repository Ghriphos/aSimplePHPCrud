<?php
/* ---------------------------------------- teste função incluir ---------------------------------------- */

include_once('funcaoTabExemplar.php');
$testeIncluirExemplar = incluirExemplar(7330,1701,30);

if ($testeIncluirExemplar) {   
    # testa se a chamada da função retorna true
    echo "\n" . "Incluido feita com sucesso";
}
else {
    echo "\n" . "Inclusão mal sucedida";
}

/* ---------------------------------------- teste função consulta ---------------------------------------- */

include_once('funcaoTabExemplar.php');
$testeConsultaExemplar = consultarExemplar();
print_r($testeConsultaExemplar);

$qtdLinhas = mysqli_num_rows($testeConsultaExemplar);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaExemplar);
        print_r($linha);
        echo "\n" . "Código do Exemplar: " . $linha['codExemplar'].
            "\n" . "Código do Livro: " . $linha['codLivro'] .
            "\n" . "Valor: " . $linha['valorExemplar'] . "\n";
}

/* ---------------------------------------- teste função consulta chave ---------------------------------------- */

include_once('funcaoTabExemplar.php');
$testeConsultaChave = consultarExemplarChave(7328);
print_r($testeConsultaChave);

$qtdLinhas = mysqli_num_rows($testeConsultaChave);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaChave);
        print_r($linha);
        echo "\n" . "Código do Exemplar: " . $linha['codExemplar'].
            "\n" . "Código do Livro: " . $linha['codLivro'] .
            "\n" . "Valor: " . $linha['valorExemplar'] . "\n";
}

/* ---------------------------------------- teste função consulta não chave ---------------------------------------- */

include_once('funcaoTabExemplar.php');
$testeConsultaNaoChave = consultarvalorExemplar(40);
print_r($testeConsultaNaoChave);

$qtdLinhas = mysqli_num_rows($testeConsultaNaoChave);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaNaoChave);
        print_r($linha);
        echo "\n" . "Código do Exemplar: " . $linha['codExemplar'].
            "\n" . "Código do Livro: " . $linha['codLivro'] .
            "\n" . "Valor: " . $linha['valorExemplar'] . "\n";
}

/* ---------------------------------------- teste função alterar nome ---------------------------------------- */

include_once('funcaoTabExemplar.php');
$testeAlterarExemplar = alterarValorExemplar(25,7329);

if($testeAlterarExemplar){
    echo "\n" . "Alteração feita com sucesso";
}
else {
    # code...
    echo "\n" . "Alteração mal sucedida";
}

/* ---------------------------------------- teste função deletar ---------------------------------------- */

include_once('funcaoTabExemplar.php');
$testeDeletarExemplar = deletarValorExemplar(7330);
if($testeDeletarExemplar  == True){
    echo "\n" . "Delete feito com sucesso";
}
else {
    # code...
    echo "\n" . "Delete mal sucedido";
}
?>