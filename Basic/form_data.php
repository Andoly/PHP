<html>
<header>
    <title>Exemplificação de formulário</title>
</header>
<body>

<?php if(!$_POST['submit']):?>
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
<b>Nome:</b> <?php echo $_POST["nome"];?><br>
<b>Email:</b> <?php echo $_POST["email"];?><br>
<b>Assunto:</b> <?php echo $_POST["assunto"];?><br>
<b>Mensagem:</b> <?php echo $_POST["mensagem"];?><br>

<a href="form.php"><br>Voltar</a>
<?php endif;?>
</body>
</html>