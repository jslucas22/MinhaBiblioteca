<?php

//-------------------------------------------------------------->
//#~> Constantes
//-------------------------------------------------------------->

define('DB_HOST', 'database_host');
define('DB_USER', 'database_username');
define('DB_PASSWORD', 'database_password');
define('DB_NAME', 'database_catalog');
define('DB_DRIVER', 'sqlsrv');

//-------------------------------------------------------------->
//#~> Conexão com o banco de dados
//-------------------------------------------------------------->

class Conexao
{
    private static $conn;

    private function __construct() {}

    public static function getConnection()
    {
        $pdoConfig = DB_DRIVER . ":" . "Server = " . DB_HOST . ";";
        $pdoConfig .= "DATABASE = " . DB_NAME . ";";

        try {
            if (!isset($conn)) {
                $conn = new PDO($pdoConfig, DB_USER, DB_PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return $conn;
        } catch (PDOException $ex) {
            $exceptionMessage = "Erro: \n" . $ex->getMessage();
            throw new Exception($exceptionMessage);
        }
    }
}
