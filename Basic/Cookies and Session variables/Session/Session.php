<?php
session_start();
$login = "php321";
$key = "123php";

if($login == "php321" and $key == "123php"){
    // Registrando variavel de sessão como verdadeiro
    $_SESSION['logado'] = true;
    echo "Logado com sucesso";
}
else {
    echo "Sem acesso";
}
?>