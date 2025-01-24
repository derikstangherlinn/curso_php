<?php

class Pessoa {

    function falar() {
        echo "Derik" . "<br>";
 }
}

$mensagem = new Pessoa();
$mensagem -> falar();


class Conta {
    function soma($n1, $n2) {
        
        return $n1 + $n2;
    }
}