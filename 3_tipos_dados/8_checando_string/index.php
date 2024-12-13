<?php

$str = "Derik";
$num = 12;

if (is_string($str)) { // true = pois a variavel $str é um texto ("Derik")
    echo "$str É uma string 1 <br>";
}

if (is_string($num)) { // false = pois o valor dentro da variavel $num é um número e nao uma string (Texto)
    echo "$num É uma string 2 <br>";
}

if (is_string("asd")) { // true = pois "asd" é um texto (string)
    echo "É uma string 3 <br>";
}


?>