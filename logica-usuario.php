<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 7/28/16
 * Time: 9:23 PM
 */

session_start();
function usuarioEstaLogado(){
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
    if(!usuarioEstaLogado()){
        $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade";
        header("Location: index.php?falhaDeSeguranca=true");
        die();
    }
}

function usuarioLogado(){
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email){
    $_SESSION["usuario_logado"] = $email;
}

function logout(){
    session_destroy();
    //or just unset($_SESSION["usuario_logado"]);
    session_start();
}