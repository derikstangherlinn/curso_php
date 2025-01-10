<?php

    $teste = "asd";
    echo "$teste global 1 <br>"; // asd global 1 no localhost

    if ( 5 > 2 ) {
        $teste = "dsa";

        echo "$teste if <br>"; // dsa if no localhost
    }

    echo "$teste global 2 <br>"; // dsa global 2

    function funcao() {

    global $teste;  

    echo "$teste local <br>";

    }

    funcao(); // dsa local 

    function testandoGlobal() {

        global $teste;

        $teste = 2; 

        echo "$teste global função <br>";
    }

    testandoGlobal(); // 2 global funcao no localhost
    
    echo "$teste global 3 <br>"; // 2 global 3 no localhost

?>