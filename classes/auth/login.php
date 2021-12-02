<?php
session_start();

//# Incluir arquivo de configuração
include('');

//# redireciona o usuario para o index caso o usuario e senha nao forem informados
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario =  mysql_real_escape_string($conexao, $_POST['usuario']);
$senha = mysql_real_escape_string($conexao, $_POST['senha']);

//# Select Query

//# Query Result

//# Quantidade de Linhas Retornadas

//# Verificar se existe alguma linha (caso sim, usuario existe, caso não, usuário inexistente )

//# usuário existe ? -> redirecionar para a dashboard
//# usuário não existe? -> redirecionar para o index
