<?php
/**
 * Created by PhpStorm.
 * User: Roberto
 * Date: 05/07/2016
 * Time: 19:43
 */
require_once("conecta.php");

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function listaProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "update produtos set nome = '{$nome}', preco = {$preco},descricao = '{$descricao}',categoria_id = {$categoria_id},usado = {$usado} 
where id = '{$id}'";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function buscaProduto($conexao, $id){
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function removeProduto($conexao, $id){
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}