<?php
/* ---------------------------------------- teste função incluir ---------------------------------------- */

include_once('funcaoTabLivro.php');
$testeIncluirLivro = inserirLivro (9001, 3292, 2803,'As Vantagens de Ser Invisivel', 312, 'Suspense', 'Neumann Livros', 16);

if ($testeIncluirLivro) {   
    # testa se a chamada da função retorna true
    echo "\n" . "Incluido feita com sucesso";
}
else {
    echo "\n" . "Inclusão mal sucedida";
}

/* ---------------------------------------- teste função consulta ---------------------------------------- */

include_once('funcaoTabLivro.php');
$testeConsultaLivroChave = consultarLivro();
print_r($testeConsultaLivroChave);

$qtdLinhas = mysqli_num_rows($testeConsultaLivroChave);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaLivroChave);
        print_r($linha);
        echo "\n" . "Código do Livro: " . $linha['codlivro'].
            "\n" . "Código do Autor: " . $linha['codAutor'] .
            "\n" . "Código da Biblioteca: " . $linha['codBiblioteca'] .
            "\n" . "Nome do Livro: " . $linha['nomeLivro'] .
            "\n" . "Número de Páginas: " . $linha['numPaginas'] .
            "\n" . "Gênero: " . $linha['genero'] .
            "\n" . "Editora: " . $linha['editora'] .
            "\n" . "Classificação de Idade: " . $linha['classificacaoIdade'] . "\n";
}

/* ---------------------------------------- teste função consulta chave ---------------------------------------- */

include_once('funcaoTabLivro.php');
$testeConsultaLivroChave = consultarLivroChave(1107);
print_r($testeConsultaLivroChave);

$qtdLinhas = mysqli_num_rows($testeConsultaLivroChave);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaLivroChave);
        print_r($linha);
        echo "\n" . "Código do Livro: " . $linha['codlivro'].
            "\n" . "Código do Autor: " . $linha['codAutor'] .
            "\n" . "Código da Biblioteca: " . $linha['codBiblioteca'] .
            "\n" . "Nome do Livro: " . $linha['nomeLivro'] .
            "\n" . "Número de Páginas: " . $linha['numPaginas'] .
            "\n" . "Gênero: " . $linha['genero'] .
            "\n" . "Editora: " . $linha['editora'] .
            "\n" . "Classificação de Idade: " . $linha['classificacaoIdade'] . "\n";
}

/* ---------------------------------------- teste função consulta nome ---------------------------------------- */

include_once('funcaoTabLivro.php');
$testeConsultaLivroChave = consultarNomeLivro('Angústia');
print_r($testeConsultaLivroChave);

$qtdLinhas = mysqli_num_rows($testeConsultaLivroChave);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaLivroChave);
        print_r($linha);
        echo "\n" . "Código do Livro: " . $linha['codlivro'].
            "\n" . "Código do Autor: " . $linha['codAutor'] .
            "\n" . "Código da Biblioteca: " . $linha['codBiblioteca'] .
            "\n" . "Nome do Livro: " . $linha['nomeLivro'] .
            "\n" . "Número de Páginas: " . $linha['numPaginas'] .
            "\n" . "Gênero: " . $linha['genero'] .
            "\n" . "Editora: " . $linha['editora'] .
            "\n" . "Classificação de Idade: " . $linha['classificacaoIdade'] . "\n";
}

/* ---------------------------------------- teste função consulta genero ---------------------------------------- */

include_once('funcaoTabLivro.php');
$testeConsultaLivroChave = consultarGeneroLivro('Suspense');
print_r($testeConsultaLivroChave);

$qtdLinhas = mysqli_num_rows($testeConsultaLivroChave);

for ($i=1; $i <= $qtdLinhas ; $i++) { 
    # roda todas as linhas do registro 
    $linha = mysqli_fetch_assoc($testeConsultaLivroChave);
        print_r($linha);
        echo "\n" . "Código do Livro: " . $linha['codlivro'].
            "\n" . "Código do Autor: " . $linha['codAutor'] .
            "\n" . "Código da Biblioteca: " . $linha['codBiblioteca'] .
            "\n" . "Nome do Livro: " . $linha['nomeLivro'] .
            "\n" . "Número de Páginas: " . $linha['numPaginas'] .
            "\n" . "Gênero: " . $linha['genero'] .
            "\n" . "Editora: " . $linha['editora'] .
            "\n" . "Classificação de Idade: " . $linha['classificacaoIdade'] . "\n";
}

/* ---------------------------------------- teste função alterar nome ---------------------------------------- */

include_once('funcaoTabLivro.php');
$testeAlterarNomeLivro = alterarNomeLivro('Angústia',1035);

if($testeAlterarNomeLivro){
    echo "\n" . "Alteração feita com sucesso";
}
else {
    # code...
    echo "\n" . "Alteração mal sucedida";
}

/* ---------------------------------------- teste função alterar genero ---------------------------------------- */

include_once('funcaoTabLivro.php');
$testeAlterarGenero = alterarGeneroLivro('Suspense',1035);

if($testeAlterarGenero){
    echo "\n" . "Alteração feita com sucesso";
}
else {
    # code...
    echo "\n" . "Alteração mal sucedida";
}

/* ---------------------------------------- teste função deletar ---------------------------------------- */

include_once('funcaoTabLivro.php');
$testeDeletar = deletarLivro(9001);
if($testeDeletar == True){
    echo "\n" . "Delete feito com sucesso";
}
else {
    # code...
    echo "\n" . "Delete mal sucedido";
}
?>