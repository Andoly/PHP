<html>
<header>
    <title>Exemplificação de formulário</title>
</header>
<body>

<!--Usado por forma de segurança por englobar os 4 métodos(GET, POST, COOKIE, SESSION)-->
<?php
$_REQUEST
?>

<?php if(!$_REQUEST['submit']):?>
<form action="form.php" method="post">

    <fieldset>
        <legend> Exemplo de formulário </legend>
        <label>Nome: <input type="text" name="nome"></label>
        <label>E-mail: <input type="text" name="email"></label>
        <label>Assunto: <input type="text" name="assunto"></label>
        <label>Mensagem: <textarea name="mensagem" rows="5"></textarea></label>
    </fieldset>
    <input type="submit" name="submit" value=" Enviar">
</form>
<?php else:?>
<h1>Dados enviados pelo formulário</h1>
<b>Nome:</b> <?php echo $_REQUEST["nome"];?><br>
<b>Email:</b> <?php echo $_REQUEST["email"];?><br>
<b>Assunto:</b> <?php echo $_REQUEST["assunto"];?><br>
<b>Mensagem:</b> <?php echo $_REQUEST["mensagem"];?><br>

<a href="form.php"><br>Voltar</a>
<?php endif;?>
</body>
</html>