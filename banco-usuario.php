<?php
/**
 * Created by PhpStorm.
 * User: Roberto
 * Date: 20/07/2016
 * Time: 22:31
 */
require_once("conecta.php");

function buscaUsuario($conexao, $email, $senha){
    $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conexao,$email);
    $query = "SELECT * FROM usuarios WHERE email='{$email}' AND senha='{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}