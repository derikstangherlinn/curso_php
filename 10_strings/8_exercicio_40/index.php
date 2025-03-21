<?php 


    $frase = "O rato roeu a roupa do Rei de Roma"; // 4 letras 'A'


    for($i = 0; $i < strlen($frase); $i++) {

    if($frase[$i] === "a") {
        $contadordeAs++;
    }

}

echo "O numero de As na frase é de : $contadordeAs";