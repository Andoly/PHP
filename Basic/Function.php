<?php

$x = 5;
echo "<b>Exemplo 1: Função com passagem de parâmetros : <br>";
function soma($x, $y=2){
    echo $x + $y ,"<br>";
}
soma(10); //Sobrescrevendo x global
soma(5,3); //definindo parâmentos
soma($x); //x global e y definido em function
soma($x,5); //x global, sobrescrevendo y definido em function

echo "<br>Exemplo 2: Função com return : <br>";
function media ($p1,$p2,$p3,$p4){
    $resultado = ($p1+$p2+$p3+$p4)/4;
    return $resultado;
}
$alunos[0]["nome"] = "Luiza";
$alunos[0]["media"] = media(7,7,8,9);

$alunos[1]["nome"] = "Eduardo";
$alunos[1]["media"] = media(7,4,6.5,10);

$alunos[2]["nome"] = "Karina";
$alunos[2]["media"] = media(8,6,5,9);

$alunos[3]["nome"] = "Vinicius";
$alunos[3]["media"] = media(9,8,6,7);

for ($i=0; $i < count($alunos); $i++){
    echo "Média do aluno(a) ".$alunos[$i]["nome"] .": ".$alunos[$i]["media"]."<br><br>";

}
?>

