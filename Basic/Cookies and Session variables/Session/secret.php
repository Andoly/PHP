<?php session_start(); ?>

<?php if(isset($_SESSION['Logado'])):?>
    <h1>Acessando página secreta</h1>
    <p>KEY SYSTEM : 541AS1-FR41FD-2SF2FS-69FSFD-FW5EMJ</p>
    <br>
    <a href="Logout.php">Logout(Sair)</a>
<?php else:?>
    <h1>Não possui permissão necessária para acesso a chave</h1>
    <a href="Session.php">Efetuar Login</a>
<?php endif;?>

