<?php

    class Pessoa {                                          
        public $nome;
        function falar() {
            echo "Ola pessoal!";
        }

        function teste() {
        }

    }

    $matheus = new Pessoa();
    $matheus ->nome = "Matheus"; 

    $matheus->nome;
    echo "Matheus <br>";

    echo $matheus -> nome;      
    echo "<br>";

    $matheus -> falar(); 