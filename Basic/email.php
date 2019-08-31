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
    <h1>Dados enviados com sucesso</h1>

<?php
    $mensagem = "Dados enviados via formulário: \n\n";
    $mensagem = "Nome: ".$_REQUEST['nome']."\n";
    $mensagem = "E-mail: ".$_REQUEST['email']."\n";
    $mensagem = "Assunto: ".$_REQUEST['assunto']."\n";
    $mensagem = "Mensagem: ".$_REQUEST['mensagem']."\n";

    $to = "andoly.borges@exegestaoempresarial.com.br";
    $assunto = "Dados enviados via formulário";
    $header = "header: from: andoly.borges@exegestaoempresarial.com.br";

    @mail($to, $assunto, $header); //@ ignora o erro em situação de não haver servidor de e-amil na máquina

?>

    <a href="form.php"><br>Voltar</a>
<?php endif;?>
</body>
</html>