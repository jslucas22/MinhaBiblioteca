<?php

//# Constantes de acesso ao banco
define('HOST', '192.168.0.100');
define('USUARIO', 'jslucas');
define('SENHA', 'tamarindo544');
define('DB', 'BANCO_FATEC');

//# Estabelecendo a conexão com o banco
$conexao = mysqli_connect(
    HOST,
    USUARIO,
    SENHA,
    DB
) or die('Não foi possível estabelecer a conexão com o banco');
