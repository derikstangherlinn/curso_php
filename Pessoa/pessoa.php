<?php

class Pessoa {

    public $nome;
    function falar() {
        echo "O " . $this->nome . " deu bom dia"; 

 }    
}

$mensagem = new Pessoa();
$mensagem->nome = "Derik";
$mensagem->falar();  
