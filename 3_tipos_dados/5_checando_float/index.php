<?php

    $a = "teste";
    $b = 12.8;

    if(is_float($a)) { // false = pois float não é um texto
        echo "é float 1 <br>";
    }

    if(is_float($b)) {  // true = pois a variavel $b é um float (12.8) (casas decimais)
        echo "é float 2 <br>";
    }

    if(is_float(6565.63)) { // true = pois o numero é um float (casas decimais)
        echo "é float 3 <br>";
    }

    if(is_float("teste")) { // false = pois float não é um texto
        echo "é float 4 <br>";
    }

    echo "CHECANDO SE O NÚMERO É UM FLOAT:";
    echo "<br>";

    if (is_float(-50.0)) // Verificou se o numero é um float, SE sim = escreve no localhost " é um float "
        echo "-O número é um float!"; // SE NAO = " nao é um float "
    else echo "-Não é um float"; 