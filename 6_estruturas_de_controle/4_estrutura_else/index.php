<?php

if (5 > 2) {

    echo "Entrou no if <br>";

} else {

    echo "Entrou no else <br>";

}


if ("Teste" === 5) {

    echo "Entrou no if 2 <br>";

} else {

    echo "Entrou no else 2 <br>";

}

//variáveis 
$a = 10;
$b = 20;

if ($a > $b) {

} else {

    echo "Entrou no else 3 <br>";

}

$msg = "Entrou no else 4 <br>";

if ($a > $b) {

} else {

    echo $msg;
    
}

$msg1 = "Entrou no else 5";

$d = 15;
$e = 20;

if ($e > $d) {

    echo $msg1;

} else {

    echo "Não entrou no else";
}