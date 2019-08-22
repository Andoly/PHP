<?php
$x[0][0] = "Array 0";
$x[0][1] = "Posição 1";

$y = $x;
#echo $x[0][0];

$animais = array("Gato", "Cachorro", "Coelho", "Macaco");
#echo $animais[1]; imprime cachorro
for($i=0; $i<4; $i++ ){
    echo $animais[$i] ,"<br />";
}

?>