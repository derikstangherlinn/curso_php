<?php

    $a = "Derik";
    $b = 100;
    $c = 89;

    if (is_int($b)) { //Verifica se a $b é um numero = true

        $m = $b * 2; // Faz a multiplicaçao desse numero por 2.
        
        if ($m > 100) { //Se for maior que 100 faça:

        echo "é maior que 100 <br>"; 

    } else {

        echo "não é maior que 100";

    }

} else {

    echo "Não é um numero"; // Se nao for nenhum dos dois faça:

}


if (is_int($c)) {

    $m = $c * 2;
    
    if ($m > 100) {

    echo "é maior que 100 <br>";

} else {

    echo "não é maior que 100";

}

} else {

echo "Não é um numero";

}


if (is_int($a)) {

    $m = $a * 2;
    
    if ($m > 100) {

    echo "é maior que 100 <br>";

} else {

    echo "não é maior que 100";

}

} else {

echo "Não é um numero";

}