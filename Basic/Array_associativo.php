<?php
$config = array(); // declaração do array
$config["nome"] = "Andoly De Souza Borges";
$config["linguagem"] = "PHP";
$config["site"] =  "http://www.google.com.br";

#echo $config["nome"], "<br/ >";
#echo $config["linguagem"];

//Representação ambigua

$exemplo = array(
    "nome" =>"Andoly De Souza Borges" ,
    "linguagem" =>"PHP",
    "site" =>  "http://www.google.com.br"
);
echo $exemplo["nome"];
?>