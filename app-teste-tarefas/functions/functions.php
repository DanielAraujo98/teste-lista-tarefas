<?php

function getAll($tbname)
{
    global $conn;

    $query = "SELECT * FROM " . $tbname;
    $result = pg_query($conn, $query);

    if (!$result) {
        echo "Erro na operação!";
        exit;
    }

    while ($row = pg_fetch_assoc($result)) {
        $results[] = $row;
    }

    return $results;
}

function getById($id)
{
    global $conn;

    $query = "SELECT * FROM cad_tarefas WHERE id = " . $id;
    $result = pg_query($conn, $query);

    if (!$result) {
        return "Erro na operação!";
    }

    while ($row = pg_fetch_assoc($result)) {
        $results[] = $row;
    }

    return $results[0];
}

function insert($data)
{
    global $conn;

    
    $descricao = $data['descricao'];
    $usuario = $data['usuario'];
    $data_tarefa = $data['data_tarefa'];
    $data_realizacao = $data['data_realizacao'];

    $query = "INSERT INTO cad_tarefas(descricao,usuario,data_tarefa,data_realizacao) VALUES('$descricao','$usuario','$data_tarefa','$data_realizacao')";

    $insert = pg_query($conn, $query);

    return pg_affected_rows($insert);
}

function updata($data)
{
    global $conn;

    $descricao = $data['descricao'];
    $usuario = $data['usuario'];
    $data_tarefa = $data['data_tarefa'];
    $data_realizacao = $data['data_realizacao'];
    $id = $data['id'];

    $query = "update cad_tarefas SET
        
        descricao = '$descricao',
        usuario = '$usuario',
        data_tarefa = '$data_tarefa',
        data_realizacao = '$data_realizacao'
        WHERE id = $id";

    $insert = pg_query($conn, $query);

    return pg_affected_rows($insert);
}

function delete($id)
{
    global $conn;
    $query = "DELETE FROM cad_tarefas WHERE id =" . $id;
    $delete = pg_query($conn, $query);

    return pg_affected_rows($delete);
}
