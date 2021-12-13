<?php

session_start();

require_once('conexao.php');
require_once('livro.php');

//-------------------------------------------------------------->
//#~> Obtém valores via POST
//-------------------------------------------------------------->

$nomeLivro = strtoupper($_POST['nome_livro']);
$editoraLivro = strtoupper($_POST['editora_livro']);
$anoPublicacaoLivro = strtoupper($_POST['ano_publicacao_livro']);
$autorLivro = strtoupper($_POST['autor_livro']);
$descricaoLivro = strtoupper($_POST['descricao_livro']);

//-------------------------------------------------------------->

$livro = Livro::inserirLivro($nomeLivro, $editoraLivro, $anoPublicacaoLivro, $autorLivro, $descricaoLivro);

//-------------------------------------------------------------->
