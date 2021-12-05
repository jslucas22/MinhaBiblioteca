<?php
session_start();

//# Incluir arquivo de configuração
include('conexao.php');

//# redireciona o usuario para o index caso o usuario e senha nao forem informados
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

//# Obtendo o usuario que foi obtido via POST
$usuario =  mysqli_real_escape_string($conexao, $_POST['usuario']);

//# Obtendo a senha que foi obtida via POST e codificando-a em base64
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//# Buscando o usuario
$sSQL = "SELECT USUARIO FROM USUARIOS WHERE USUARIO = '{$usuario}' and senha = base64_encode('{$senha}')";

//# Retornando o numero de linhas da query executada
$linha = mysqli_num_rows(mysqli_query($conexao, $sSQL));

//# Redireciona o usuário para dashboard caso exista
if ($row > 0) {
    $_SESSION['usuario'] = $usuario;
    header('Location: /Dashboard/index.php');
    exit();    
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}
