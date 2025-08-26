<?php

    $arr = [
        'nome'  => 'Derik',
        'idade' => 21
    ];

    if(array_key_exists("nome", $arr)) {

        echo "A key existe! <br>";

    } else {

        echo "A key não existe! <br>";

    }

    if(array_key_exists("profissão", $arr)) {

        echo "A key existe! <br>";

    } else {

        echo "A key não existe! <br>";
    }

    if (isset($arr['nome'])) {
        
        echo "A key existe! ISSET <br>";

    } else {

        echo "A key não existe! ISSET <br>";
    }

    if (isset($arr['teste'])) {
        
        echo "A key existe! ISSET <br>";

    } else {

        echo "A key não existe! ISSET <br>";
    }

    $x = 10;

      if (isset($x)) {
        
        echo "A var existe! ISSET <br>";

    } else {

        echo "A var não existe! ISSET <br>";
    }