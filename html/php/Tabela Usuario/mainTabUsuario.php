<?php
include_once('funcaoTabUsuario.php');
$testeLogin = logarUsuario('marcos.kd@hotmail.com',12131415);
if ($testeLogin == True) {
    # code...
    echo "\n" . "Login feito com sucesso! ";
}
else {
    # code...
    echo "\n" . "Login mal sucedido, email ou senha podem estar incorretos! ";
}

/* ---------------------------------------- teste função incluir ---------------------------------------- */

include_once('funcaoTabUsuario.php');
$testeIncluirUsuario = incluirUsuario('luis.melo@aluno.ifsp.edu.br',12345678);

if ($testeIncluirUsuario) {   
    # testa se a chamada da função retorna true
    echo "\n" . "Incluido feita com sucesso";
}
else {
    echo "\n" . "Inclusão mal sucedida";
}
?>