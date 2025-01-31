<?php

class Pessoa {

    public $nome;
    public $idade;
    function falar() {
        echo "O " . $this->nome . " deu bom dia"; 
        echo "<br>";
        echo "E tem " . $this->idade . " anos"; 
 }    
}

$mensagem = new Pessoa();
$mensagem->nome = "Derik";
$mensagem->idade = 21;
$mensagem->falar();  
