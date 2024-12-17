<?php

echo NULL;

$nome = NULL;

if(is_null($nome)) { // Verifica se a variavel $nome tem OU nao um valor, nesse caso o valor é nulo.
    echo "O valor é nulo";  // E SE for nulo, vai imprimir a mensagem no localhost.
}

$nome = "Matheus";          //Atribui "Matheus" na variavel nome, logo após verifica se essa variavel é nula, e SE for nula vai imprimir no localhost 
if(is_null($nome)) { // E ja que não é nula, não ira imprimir nada no localhost, pois a string "Matheus" esta dentro da $nome.
    echo "O valor é nulo!";
}