<?php

    function soma($a, $b) {

        echo $a + $b;
        echo "<br>";

    }

    soma (2, 4); // Imprimiu a soma dos numeros no localhost.
    soma (6, 8);
    soma (10, 10); 


echo "A soma dos números 2 e 4 é: " . soma(2, 4) . "<br>"; // Usa o operador de concatenação '.' para unir a string com o resultado da soma.
echo "A soma dos números 6 e 8 é: " . soma(6, 8) . "<br>";
echo "A soma dos números 10 e 10 é: " . soma(10, 10) . "<br>";