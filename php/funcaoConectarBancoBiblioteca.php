<?php

function conectarBancoBiblioteca(){
    $c = mysqli_connect("localhost", "root", "", "bancobiblioteca");
    if (mysqli_connect_errno()==0) {
        # code...
        echo "Conexão bem-sucedida" . "\n";
    }
    else{
        $msg = mysqli_connect_error();
        echo "\n" . "conexão mal-sucedida";
        echo "\n" . "O MySQL retornou a seguinte mensagem: " . $msg;
    }
    return $c;
}