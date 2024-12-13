<?php
    if (is_int(5)) { // true
        echo "é um inteiro 1 <br>";
    }
    if (is_int("nao é um intero")) { // false
        echo "é um inteiro 2 <br>";
    }
    $a = 10; 
    if (is_int($a)) { // true
        echo "é um inteiro 3 <br>";
    }


