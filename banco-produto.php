<?php
/**
 * Created by PhpStorm.
 * User: Roberto
 * Date: 05/07/2016
 * Time: 19:43
 */
function insereProduto($conexao, $nome, $preco) {
    $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function listaProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao, "select * from produtos");
    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function removeProduto($conexao, $id){
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}