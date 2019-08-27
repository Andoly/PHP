<?php session_start(); ?>

<?php if($_SESSION['logado']):?>
<h1>Acessando pagina secreta</h1>
<p>KEY SYSTEM : 541AS1FR41FD2SF2FS69FSFDFW5EMJ4</p>
<?php else:?>
<h1>Sem permissão necessária para acesso a senha</h1>
<?php endif;?>
