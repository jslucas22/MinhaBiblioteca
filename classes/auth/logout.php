<?php

//# Redireciona o usuário para o index após iniciar e destruir a sessão
session_start();
session_destroy();
header('Location: ../../index.php');
exit();
