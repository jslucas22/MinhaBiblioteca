<?php
session_start();

//# Redireciona o usuário para o index
if(!$_SESSION['usuario']) {
    header('Location: ../index.php');
    exit();
}
