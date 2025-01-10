<?php

$a = "5";
$b = 12;
$expressao = $a * $b;

/*
Ou
$operacao = "5" * 12;
echo $operacao
*/

echo $expressao . "<br>";
echo gettype($expressao);
echo "<br>";
echo gettype([]); //Array
echo "<br>";
echo gettype(12.2); //Float
echo "<br>";
echo gettype ("teste"); // String

?>