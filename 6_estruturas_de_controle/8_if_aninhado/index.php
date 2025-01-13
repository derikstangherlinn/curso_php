<?php

    if (10 > 2) {

        echo "Entrou no primeir if <br>";

        if ("Teste" == "Teste") {

            echo "entrou no segundo if <br>";
        }

    }

    if (10 > 2) {

        echo "Entrou no primeiro if 2 <br>";

        if ("Teste" != "Teste") {

            echo "Entrou no segundo if 2 <br>";

        } else {

            echo "Entrou no segundo else <br>";
        }

    }


    if (10 < 2) {

        echo "Entrou no primeiro if 2 <br>";

        if ("Teste" != "Teste") {

            echo "Entrou no segundo if 2 <br>";

        } else {

            echo "Entrou no segundo else";
        }

    } else {

        echo "Entrou no primeiro else <br>";

    }

    $escopo = 10;

    if (10 > 2) {

        echo "Entrou no primeiro if 2 <br>";

        $escopo2 = 20;

        if ("Teste" == "Teste") {

            echo "Entrou no segundo if 2 <br>";

            echo $escopo;
            echo " " . $escopo2;

        } else {

            echo "Entrou no segundo else 2 <br>";
        }

    } else {

        echo "Entrou no primeiro else <br>";
        
    }
