<?php

require 'pessoa.php';
echo "=====================";
echo "<br>";
$pessoa2 = new Pessoa();
$pessoa2 ->nome = "Pedro";
$pessoa2 ->idade = 18;

echo "<br>" . $pessoa2->falar();
echo "=====================";
echo "<br>";
 
$pessoa3 = new Pessoa();
$pessoa3-> nome = "Laura";
$pessoa3 -> idade = 19;

echo "<br>" . $pessoa3->falar();
echo "=====================";
echo "<br>";

$mensagem = new Pessoa();
$mensagem->nome = "Derik";
$mensagem->idade = 21;

echo "<br>" . $mensagem->falar();
echo "=====================";
echo "<br>";

echo "Soma:" . soma(10,5);
echo "<br>";
echo "=====================";

