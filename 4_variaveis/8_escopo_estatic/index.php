<?php

    function teste() { // a função mantem a soma do +1, uma unica vez.

        $a = 0;
        $a++; 

        echo "$a <br>";

    }

    teste();
    teste();
    teste();

    function testeStatic() {

        static $a = 0;  // o static faz a funcao ir adicionando +1 toda vez que for chamada.
        $a++;

        echo "$a <br>";

    } 

    testeStatic();
    testeStatic();
    testeStatic();

