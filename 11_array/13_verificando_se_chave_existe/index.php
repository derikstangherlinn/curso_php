<?php

    $arr = [
        'nome'  => 'Derik',
        'idade' => 21
    ];

    if(array_key_exists("nome", $arr)) {

        echo "A Chave existe! <br>";

    } else {

        echo "A chave não existe! <br>";

    }

    if(array_key_exists("profissão", $arr)) {

        echo "A chave existe! <br>";

    } else {

        echo "A chave não existe! <br>";
    }

    if (isset($arr['nome'])) {
        
        echo "A chave existe! ISSET <br>";

    } else {

        echo "A chave não existe! ISSET <br>";
    }

    if (isset($arr['teste'])) {
        
        echo "A chave existe! ISSET <br>";

    } else {

        echo "A chave não existe! ISSET <br>";
    }

    $x = 10;

      if (isset($x)) {
        
        echo "A var existe! ISSET <br>";

    } else {

        echo "A var não existe! ISSET <br>";
    }