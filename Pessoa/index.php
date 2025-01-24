<?php

require 'pessoa.php';

$soma = new Conta();

$somar = $soma -> soma(50, 100);

echo "Soma: " . $somar;
