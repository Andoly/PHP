<?php
session_start();
/* unset() destrói variável de sessão */
unset($_SESSION['Logado']);
header("location: secret.php"); //Redireciona
?>