<?php

    $a = 4;
    $b = 5;
    $c = 4;
    $d = 10;
    $e = "10";

    if ($a == $b) {
        echo "A é igual a B <br>";
    }

    if ($a == $c) { //Usou sinal de igualdade 4==4.
        echo "A é igual a C <br>";
    }

    if ($d === $e) { //Usou sinal de identico a para saber se o VALOR 10 é identico a STRING "10".
        echo "Os valores são identicos";
    } 
     else {
        echo "Os valores NÃO são identicos";
    } 

?>