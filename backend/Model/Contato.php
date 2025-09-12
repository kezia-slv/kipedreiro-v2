<?php
/*
função é um bloco de código que pode ser reutilizado 
e pode receber parâmetros
e ele fica esperando ser chamado
*/

/* Executa uma instrução preparada passando um array de valores */
function buscaContato($db){
    $sql = 'SELECT id_contato, nome_contato, email_contato, telefone_contato, mensagem_contato FROM tbl_contato';
    $statment = $db->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    $statment->execute();
    return $resultado = $statment->fetchAll();
}

function buscarContatoPorId($db, $id){
    $sql = 'INSERT INTO tbl_contato (nome_contato, email_contato, telefone_contato, mensagem_contato) 
    VALUES (:nome, :email, :telefone, :mensagem)';
    $statment = $db->prepare($sql);
    $statment = bindParam(':id', $id);
    return $statment->execute();
}

function registrarContato($db, $nome, $email, $telefone, $mensagem){
    $sql = 'SELECT id_contato, nome_contato, email_contato, telefone_contato, mensagem_contato FROM tbl_contato WHERE id_contato = :id';
    $statment = $db->prepare($sql);
    $statment->bindParam(':id', $id);
    return $statment->execute();
}
