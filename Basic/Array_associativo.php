<?php
$config = array(); // declaração do array
$config["Formação"] = "Curso: Ciências da Computação";
$config["linguagem"] = "C / PHP / JAVA / Javascript / Flutter / PgAdmin4 / MySQL / HTML / CSS";
$config["repositorio"] =  "https://github.com/Andoly/PHP";

echo $config["Formação"], "<br/>";
echo $config["linguagem"], "<br/>";
echo $config["repositorio"], "<br/>";

$exemplo = array(
    0=>array(
        "nome" =>"Andoly",
        "linguagem" =>"C / PHP / JAVA / Javascript / Flutter / PgAdmin4 / MySQL / HTML / CSS",
    ),
    1 =>"Framework : Laravel "

);
echo $exemplo["nome, <br/>"];
echo "<br/> <br/> print_r : Desmembra a estruturação interna do array: <br/>";
print_r($exemplo);
echo "<br/> <br/> var_dump é um print_r que conta a quantidade arrays e sua quantidade de strings: <br/>";
var_dump($exemplo);
?>