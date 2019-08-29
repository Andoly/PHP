<?php
session_start();
$login = "php321";
$key = "123php";

if($login == "php321" and $key == "123php"){
    // Registrando variavel de sessão como verdadeiro
    $_SESSION['Logado'] = true;
    header("location: secret.php"); //Redireciona para Secret.php como logado
}
else {
    echo "Sem acesso";
}
?>