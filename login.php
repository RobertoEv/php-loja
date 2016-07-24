<?php
/**
 * Created by PhpStorm.
 * User: Roberto
 * Date: 20/07/2016
 * Time: 22:29
 */

include ("conecta.php");
include ("banco-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario == null){
    header("Location: index.php?login=0");
}else{
    header("Location: index.php?login=1");
}
die();