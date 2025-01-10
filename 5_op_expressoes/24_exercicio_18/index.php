<?php

// comparacao 1
if(12 < 5 || "João" === "João") { // V F = V, pois uma delas foi verdadeira.
    echo "A operacao 1 é verdadeira <br>";
}

// comparacao 2
if(1 > 5 || 1) { // V V = V
    echo "A operacao 2 é verdadeira <br>";
}

//comparacao 3 
if( 20 === "20" && 51 >= 31) { // F V = F por conta do &&
    echo "A operacao 3 é verdadeira <br>";
}

//comparacao teste
if (20 == "20" && 51 >= 31) { // V V = V 
    echo "A operacao teste é verdadeira <br>";
}

?>
