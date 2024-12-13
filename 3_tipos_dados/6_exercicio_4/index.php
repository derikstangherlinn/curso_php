<?php
    echo "0.05";
    echo "<br>";
    echo "-5.19";
    echo "<br>";

$a = -500.500;

echo $a;
echo "<br>";

if (is_float($a)) { // Verifica se o valor dentro da variavel é um float (negativo, ou com mais casa decimais) SE sim exibe a mensagem abaixo 
    echo "Sim, podemos ter floats negativos!";  
}

if (is_int($a)) { //] false =  apesar de ser um numero ele nao é considerado um float, pois nao é negativo e nem pula casas decimais
    echo "É um inteiro";      
}
?>