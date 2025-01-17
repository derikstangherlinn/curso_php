<?php

$nome = ["Derik", "Joao", "Pedro", "Maria"];

$a = 10;

foreach($nomes as $nome) {
    echo "O nome do indice atual é $nome <br>";
    if ($nome == "Derik") {
        echo "Opa $a <br>";
    }
}