<?php

function listaTarefas($conexao){
        $tarefas = array();
        $result = mysqli_query($conexao, "select * from lista_tarefas");
        
        while($tarefa = mysqli_fetch_assoc($result)){
            array_push($tarefas, $tarefa);
        }
        return $tarefas;
    }
    

function InsereTarefa($conexao, $usuario, $descricao, $data){
    $query = "insert into lista_tarefas (usuario, datas, descricao) values ('{$usuario}', '{$data}', '{$descricao}')";
    return mysqli_query($conexao, $query);
}

function removeTarefa($conexao, $id){
    $query = "delete from lista_tarefas where id = {$id}";
    return mysqli_query($conexao, $query);
}
   
function buscaTarefa($conexao, $id){
    $query = "select * from lista_tarefas where id = {$id}";
    $result = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($result);
}

function alteraTarefa($conexao, $id, $usuario, $descricao, $data){
    $query = "update lista_tarefas set usuario = '{$usuario}',datas = '{$data}',descricao = '{$descricao}' where id = '{$id}'";
    return mysqli_query($conexao, $query);
    
}


