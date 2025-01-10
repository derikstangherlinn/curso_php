<?php

    $a = true;

    if (is_bool($a)) {
        echo "É um booleano 1! <br>";
    } 

    if (is_bool(0)) { // false = pois considera o 0 como um numero.
        echo "É um booleano 2! <br>";
    } 

    if (is_bool(false)) { 
        echo "É um booleano 3! <br>";
    } 

    if (0 == false) { // comparando o 0 com um false (==) 
        echo "0 é considerado falso! <br>";
    }
?>