<?php

require_once 'calculadora.php';

$calc = new Calculadora();


$soma = $calc->adicao(50, 5);
$subtracao = $calc->subtracao(10, 5);
$multiplicacao = $calc->multiplicacao(10, 5);
$divisao = $calc->divisao(10, 5);


echo "Soma: $soma<br>";
echo "Subtração: $subtracao<br>";
echo "Multiplicação: $multiplicacao<br>";
echo "Divisão: $divisao<br>";

?>
