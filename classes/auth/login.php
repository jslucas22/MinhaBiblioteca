<?php

session_start();

require_once "../conexao.php";

//-------------------------------------------------------------->
//#~> Obtém dados passados via POST
//-------------------------------------------------------------->

$usuario =  $_POST['usuario'];
$senha   =  $_POST['senha'];

//# Codifica as credenciais senha em base64
$credenciais   =  base64_encode($usuario . ":" . $senha);

//-------------------------------------------------------------->
//#~> Checando entrada de dados
//-------------------------------------------------------------->

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

//-------------------------------------------------------------->
//#~> Buscando dados
//-------------------------------------------------------------->

$conexao = Conexao::getConnection();
$sSQL    = $conexao->query("SELECT USUARIO FROM USUARIO WHERE USUARIO = '{$usuario}' and senha = ('{$credenciais}')");

$usuario = $sSQL->fetchAll();

//-------------------------------------------------------------->
//#~> Checando existencia do usuário
//-------------------------------------------------------------->

if (!empty($usuario)) {
    $_SESSION['usuario'] = $usuario;
    header('Location: ../../Dashboard/index.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location:../../index.php');
    exit();
}
