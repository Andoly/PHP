<?php

$login = "admin";
$key = 0252;

if ($login == "admin" and $key == 0252 ){
    echo "\n Congratulations, you are logged in \n";
}
elseif ($login == "admin" and $key <> 0252) {
    echo "\n Correct user but invalid password \n";
}
else {
    echo "\n Access Error\n";
}

?>