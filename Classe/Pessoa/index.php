<?php

require 'pessoa.php';

$pessoa2 = new Pessoa();
$pessoa2 ->nome = "Azevedo";
$pessoa2 ->idade = 18;
echo "<br>";
$pessoa2->falar();
 
$pessoa3 = new Pessoa();
$pessoa3-> nome = "Stangherlin";
$pessoa3 -> idade = 19;
echo "<br>";
$pessoa3->falar();
