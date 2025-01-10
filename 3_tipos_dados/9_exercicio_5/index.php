<?php   

    echo 'Testando aspas simples <br>';
    echo "<br>";
    echo "Testando aspas duplas <br>";
    echo "<br>";

    $nome = "derik";
    $idade = 20;

        echo " 'Ola' meu nome é $nome e possuo $idade anos <br>"; // Imprimiu o texto normalmente no localhost, pois o if está depois
if (is_string($idade)){
        echo "A idade dele é uma string <br>"; // Verificou se a idade é uma string SE SIM = "é uma string" SE NAO = "não é" 
        }   
else echo "A idade dele não é uma string";

?>
