<html>
<header><title>Simulação de Formulário</title></header>
<body>
<!--$_POST: retorna da mesmo forma do método get, porém de forma oculta na barra de endereços-->

<!--$_GET: retorna(carrega) uma quantidade de informação limitada na barra de endereços-->
<form action="form.php" method="get">

        <fieldset>
        <legend> Exemplo de formulário </legend>
        <label>Nome: <input type="text" name="nome" value="<?=$_GET["nome"]?>"></label>
    </fieldset>
    <input type="submit" name="submit" value=" Enviar">
</form>

</body>
</html>