<?php

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {

        if ($this->tampada == true) {
            echo "<p>Erro!, não posso rabiscar! "; 
     }   else  { 
        echo "<p>Estou rabiscando...</p>";
     }
      
    }

    function tampar() {
        
    }
    function destampar() {

    }

}