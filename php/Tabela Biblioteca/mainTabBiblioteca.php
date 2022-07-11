<?php
/* ---------------------------------------- teste função incluir ---------------------------------------- */

include_once('funcaoTabBiblioteca.php');
$testeIncluirBiblioteca = inserirBiblioteca(3350, 'Avenida Tiradentes, 480', 'Biblioteca do Saci');

if ($testeIncluirBiblioteca) {   
    # testa se a chamada da função retorna true
    echo "\n" . "Incluido feita com sucesso";
}
else {
    echo "\n" . "Inclusão mal sucedida";
}

/* ---------------------------------------- teste função consulta ---------------------------------------- */

include_once('funcaoTabBiblioteca.php');
$testeConsultaBiblioteca = consultarBiblioteca();
print_r($testeConsultaBiblioteca);

$qtdLinhas = mysqli_num_rows($testeConsultaBiblioteca);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaBiblioteca);
        print_r($linha);
        echo "\n" . "Código: " . $linha['codBiblioteca'].
            "\n" . "Nome: " . $linha['nomeBiblioteca'] .
            "\n" . "Endereço: " . $linha['enderecoBiblioteca'] . "\n";
}

/* ---------------------------------------- teste função consulta chave ---------------------------------------- */

# achei a função incluir e incluir com chave, talvez tenha feito errado pois foi muito simples a mudança que tive que fazer

include_once('funcaoTabBiblioteca.php');
$testeConsultaBibliotecaChave = consultarBibliotecaChave(1106);
print_r($testeConsultaBibliotecaChave);

$qtdLinhas = mysqli_num_rows($testeConsultaBibliotecaChave);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaBibliotecaChave);
        print_r($linha);
        echo "\n" . "Código: " . $linha['codBiblioteca'].
            "\n" . "Nome: " . $linha['nomeBiblioteca'] .
            "\n" . "Endereço: " . $linha['enderecoBiblioteca'] . "\n";
}

/* ---------------------------------------- teste função consulta sem chave (nomeBiblioteca) ---------------------------------------- */

include_once('funcaoTabBiblioteca.php');
$testeConsultaBibliotecaSemChave = consultarBibliotecaNome('Monteiro Lobatoo');
print_r($testeConsultaBibliotecaSemChave);

$qtdLinhas = mysqli_num_rows($testeConsultaBibliotecaSemChave);
for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaBibliotecaSemChave);
        print_r($linha);
        echo "\n" . "Código: " . $linha['codBiblioteca'].
            "\n" . "Nome: " . $linha['nomeBiblioteca'] .
            "\n" . "Endereço: " . $linha['enderecoBiblioteca'] . "\n";
}


/* ---------------------------------------- teste função consulta sem chave (enderecoBiblioteca) ---------------------------------------- */

include_once('funcaoTabBiblioteca.php');
$testeConsultaBibliotecaSemChave = consultarBibliotecaEndereco('Avenida Salgado Filho 713');
print_r($testeConsultaBibliotecaSemChave);

$qtdLinhas = mysqli_num_rows($testeConsultaBibliotecaSemChave);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaBibliotecaSemChave);
        print_r($linha);
        echo "\n" . "Código: " . $linha['codBiblioteca'].
            "\n" . "Nome: " . $linha['nomeBiblioteca'] .
            "\n" . "Endereço: " . $linha['enderecoBiblioteca'] . "\n";
}

/* ---------------------------------------- teste função alterar nome ---------------------------------------- */

include_once('funcaoTabBiblioteca.php');
$testeAlterarBiblioteca = alterarNomeBiblioteca('Monteiro Lobato',1079);

if($testeAlterarBiblioteca){
    echo "\n" . "Alteração feita com sucesso";
}
else {
    # code...
    echo "\n" . "Alteração mal sucedida";
}

/* ---------------------------------------- teste função alterar endereco ---------------------------------------- */

include_once('funcaoTabBiblioteca.php');
$testeAlterarBiblioteca = alterarEnderecoBiblioteca('Avenida Salgado Filho 714', 1079);

if($testeAlterarBiblioteca){
    echo "\n" . "Alteração feita com sucesso";
}
else {
    # code...
    echo "\n" . "Alteração mal sucedida";
}

/* ---------------------------------------- teste função deletar ---------------------------------------- */

include_once('funcaoTabBiblioteca.php');
$testeDeletarBiblioteca = deletarBiblioteca(3350);
if($testeDeletarBiblioteca == True){
    echo "\n" . "Delete feito com sucesso";
}
else {
    # code...
    echo "\n" . "Delete mal sucedido";
}
?>