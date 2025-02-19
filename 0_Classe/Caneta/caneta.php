<?php

class Caneta {
   public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {

        if ($this->tampada == true) {
            echo "<p>Erro!, não posso rabiscar! "; 

     }   else  { 
            echo "<p>Estou rabiscando...</p>";
     }
    }

    public function tampar() {
        $this->tampada = true;
        

    }
    
    public function destampar() {
        $this->tampada = false;

    }

    public function GetPonta() {
        return $this->ponta;
    }

    public function SetPonta($p) {
        $this-> ponta = $p;
    }

    public function GetCarga() {
        return $this->carga;
    }

    public function SetCarga($c) {
        $this->carga = $c;
    }

    public function GetTampada() {
        return $this->tampada;
    }

    public function SetTampada($t) {
        $this->tampada = $t;
    }
}