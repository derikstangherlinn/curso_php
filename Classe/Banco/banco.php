<?php

    Class ContaBanco {
        public $numConta; 
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
    }

    public function SetNumConta($n) {
        numConta = $n; 
    }
    public function GetNumConta() {
        return numConta;
    }
    public function SetTipo($t) {
        tipo = $t; 
    }
    public function GetTipo() {
        return tipo;
    }
    public function SetDono($d) {
        dono = $d;
    }
    public function GetDono() {
        return dono;
    }
    public function SetStatus($s) {
        status = $s;
    }
    public function GetStatus() {
        return status;
    }

    public function __construct() {
        saldo = 0;
        status = false; 
    }

    public function abrirConta($t) {
        setTipo($t);
        setStatus(true);
        if (t = "CC") {
            saldo = 50;
        } else if (t = "CP") {
            saldo = 150;
        } 
    }

    public function fecharConta($s){
        if (saldo > 0) {
            echo ("A conta tem dinheiro!");
        } else if (saldo < 0) {
            echo ("Conta em débito!");
        } else {
            setStatus(false);
        }
    }

    public function depositar($v) {
        if (status = true) {
            setSaldo(getSaldo() + v);
        } else {
            echo "Impossivel depositar";
        }
    }

    public function sacar($v) {
        if (status = true) {
            if (saldo > v) {
            Setsaldo(Getsaldo() - v);
            } else {
                echo "Saldo Insuficiente";
            } 
        } else {
            echo "Impossivel Sacar";
        }
    }

    public function pagarMensal() {
        var $v
        if (tipo = "CC") {
            v = 12; 
        } else if (tipo = "CP") {
            v = 20;
        }
        if (status = true) {
            if (saldo > V) {
                saldo = saldo - v
            } else {
                echo "Saldo Insuficiente";
            }
        } else "Impossivel Pagar";
         
    }