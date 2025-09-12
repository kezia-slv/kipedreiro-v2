<?php
include_once 'backend/Database/Database.php';
include_once 'backend/Model/Contato.php';
//operação ternaria
$nome = $_POST["nome"] ?? '';
$email = $_POST["email"] ?? '';
$telefone = $_POST["telefone"] ?? '';
$mensagem = $_POST["mensagem"] ?? '';

$ok = registrarContato($db, $nome, $email, $telefone, $mensagem);
if($ok > 0 || $ok === true){
    echo "Usuário cadastrado com sucesso!";
}else{
    echo "Erro ao cadastrar usuário!";
}