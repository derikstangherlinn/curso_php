<?php

    $x = 5;

    switch ($x) {

    case 0: // CASO o $x for igual a 0, faça o echo do 0
        echo "x é igual a 0 <br>";
        break; // Faz o break do case 0, somente mostrando o case 1
    case 1: // CASO for igual a 1, faça o echo do 1
        echo "X é igual a 1 <br>";
        break; // Faz o break do case 1, somente mostrando o case 0
      default: // como se fosse um ELSE.
        echo "X não é igual a nenhum dos valores mencionados <br>";  

    }

    $y = "";

    switch ($y) {

    case "Derik":
        echo "O nome é Derik";
        break;
    case "João";
        echo "O nome é João";
        break;
       default:
          echo "O nome não foi encontrado";

    }