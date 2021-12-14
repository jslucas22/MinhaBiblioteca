<?php

use JetBrains\PhpStorm\ExpectedValues;

require_once "conexao.php";

class inserirLogLogin
{

  public static function insertLog()
  {
    //-------------------------------------------------------------->

    $ip_externo             =    $_SERVER['REMOTE_ADDR'];
    $navegador              =    $_SERVER['HTTP_USER_AGENT'];
    $usuario                =    $_POST['usuario'];
    $sucesso                =    $_SESSION['nao_autenticado'] == false ? $sucesso = true : false;
    $nome_host              =    gethostname();

    //-------------------------------------------------------------->
    //~> Inserindo os dados no banco
    //-------------------------------------------------------------->

    $conexao = Conexao::getConnection();

    $query = "INSERT INTO LOG_LOGIN (
                      IP_EXTERNO
                    , NAVEGADOR
                    , USUARIO
                    , SUCESSO
                    , NOME_HOST
                    ) 
          VALUES (
                      '{$ip_externo}'
                    , '{$navegador}'
                    , '{$usuario}'
                    , '{$sucesso}'
                    , '{$nome_host}'
                    )";

    $conexao->query($query);

    //-------------------------------------------------------------->
  }
}
