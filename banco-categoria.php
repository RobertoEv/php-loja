<?php

function listaCategorias($conexao){
    $categorias = array();
    $query = "SELECT * from categorias";
    $resultado = mysqli_query($conexao, $query);
    while($categoria = mysql_fetch_assoc($resultado)){
        array_push($categorias, $categoria);
    }
    return $categorias;
}