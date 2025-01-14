<?php

    $x = 5;

    switch ($x) {

    case 0:
        echo "x é igual a 0 <br>";
        break;
    case 1:
        echo "X é igual a 1 <br>";
        break;
      default:
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