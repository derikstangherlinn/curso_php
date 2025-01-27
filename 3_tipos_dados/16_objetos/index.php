<?php

    class Pessoa {                                          
        public $nome; //$nome é um atributo
        function falar() {
            echo "Ola pessoal!";
        }

        function teste() {
        }

    }

    $derik = new Pessoa();  //$derik acabou se tornando um objeto
    $derik->nome = "Derik 1"; //Esta atribuindo o objeto para o atributo

    $derik->nome;
    echo "Derik 2 <br>";

    echo $derik ->nome;      
    echo "<br>";

    $derik-> falar(); //Atribuiu o objeto para a funcao falar
    
?>