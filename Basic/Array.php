<?php
$x[0][0] = "Array 0";
$x[0][1] = "Posição 1";

$y = $x;
#echo $x[0][0];

$animais = array("Gato", "Cachorro", "Coelho", "Macaco");
#echo $animais[1]; imprime cachorro
echo "Array de animais : <br />";
for($i=0; $i<4; $i++ ){
    echo $animais[$i] ,"<br />";
}
echo "<br />";

$nomes = array(0=>"Andoly", 1=> "Douglas", 2=> "Diony", 3=> "Maryana", 4=>"Thaynara");

$sobrenomes = array(
    0=>array(
        0=>" Souza",
        1=>" Viera",
        2=>" Ribeiro",
        3=>" Borges",
        4=>" Santos"
    ),
    1=>"Array de Array"
);
echo "Array de nomes :  <br />";
for($i=0; $i<5; $i++ ){
    echo $nomes[$i] , $sobrenomes[0][$i],"<br />";
}


?>