<?php

class Caneta2 {

    public $modelo; 
 
    public function escrever() {
        if ($this->modelo == "BIC") {
            echo "Temos no estoque!";
        } else {
            echo "NÃO temos no estoque!";
        }
    }
}
