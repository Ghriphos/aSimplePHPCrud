<?php

include_once('Tabela Usuario/funcaoTabUsuario.php');

session_start();
extract($_REQUEST,EXTR_SKIP);

if (isset($acao)) {
    # code...
    if($acao == "logarUsuario"){
        if(isset($loginUsuario) && isset($senhaUsuario)){
            $loginUsuario = htmlspecialchars_decode(strip_tags($loginUsuario));
            $senhaUsuario = htmlspecialchars_decode(strip_tags($senhaUsuario));
            if(logarusuario($loginUsuario,$senhaUsuario)){
                $_SESSION['msg'] = "<br>" . "Login realizado com sucesso!" . "<br>";
                $_SESSION['login'] = $loginUsuario;
            }
            else{
                $_SESSION['msg'] = "<br>" . "Login ou senha podem estar incorretos!" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
        sleep(2);
        if (logarUsuario($loginUsuario,$senhaUsuario)){
            header("Location: ". '../alterar.php');
        }
    }
    if($acao == "deslogarUsuario"){
        session_destroy();
        header("Location: ". '../index.php');
    }
}


