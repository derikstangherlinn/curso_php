<?php

    $vel = 60;
    $velMax = 40;

    if($vel < $velMax) {

        echo "Parabens, voce esta numa velocidade segura <br>";

    } else if ($vel == $velMax) {

        echo "Cuidado! Voce esta no limite de velocidade <br>";

    } else {

        echo "Voce foi multado, velocidade acima do permitido <br>";
        
    }