<?php

    $pessoa = ["Derik", 21, "Programador", "Verde"];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $corDoOlho) = $pessoa;
    
    echo "$nome <br>";
    echo "$idade<br>"; 
    echo "$profissao <br>"; 
    echo "$corDoOlho <br>"; 
