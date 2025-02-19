<!DOCTYPE html>
    <head>
            <meta charset= "UTF-8">
            <title>POO</title>
            <h2>Minha Calculadora:</h2>
        <body>
<?php

require_once 'calculadora.php';

$calc = new Calculadora();


$soma = $calc->adicao(50, 50);
$subtracao = $calc->subtracao(10, 5);
$multiplicacao = $calc->multiplicacao(10, 5);
$divisao = $calc->divisao(10, 5);


echo "Soma: $soma<br>";
echo "Subtração: $subtracao<br>";
echo "Multiplicação: $multiplicacao<br>";
echo "Divisão: $divisao<br>";

?>
</body>
    </html>
