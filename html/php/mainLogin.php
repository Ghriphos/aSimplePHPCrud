<?php

include_once('Tabela Usuario/funcaoTabUsuario.php');

extract($_REQUEST,EXTR_SKIP);

if (isset($acao)) {
    # code...
    if($acao == "logarUsuario"){
        if(isset($loginUsuario) && isset($senhaUsuario)){
            $loginUsuario = htmlspecialchars_decode(strip_tags($loginUsuario));
            $senhaUsuario = htmlspecialchars_decode(strip_tags($senhaUsuario));
            if(logarusuario($loginUsuario,$senhaUsuario)){
                echo "<br>" . "Login realizado com sucesso!" . "<br>";
                header('Location: '.'../alterar.html');
            }
            else{
                echo "<br>" . "Login ou senha podem estar incorretos!" . "<br>";
            }
        }
    }
}
