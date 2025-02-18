<?php

    Class ContaBanco {
        public $numConta; 
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso</p>";
    }

    public function SetNumConta($n) {
        $this->numConta = $n; 
    }
    public function GetNumConta() {
        return $this->numConta;
    }
    public function SetTipo($t) {
        $this->tipo = $t; 
    }
    public function GetTipo() {
        return $this->tipo;
    }
    public function SetDono($d) {
        $this->dono = $d;
    }
    public function GetDono() {
        return $this->dono;
    }
    public function SetStatus($s) {
        $this->status = $s;
    }
    public function GetStatus() {
        return $this->status;
    }
    public function GetSaldo() {
        return $this->saldo;
    }
    public function SetSaldo($s) {
        $this->saldo = $s;
    }


    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->SetSaldo(50);
        } else if ($t == "CP") {
            $this->SetSaldo(150);
        } 
    }

    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo ("A conta tem dinheiro! " . "<br>");
        } else if ($this->getSaldo() < 0) {
            echo ("Conta em débito! " );
        } else { 
            $this->setStatus(false);
            echo "<p>Conta de " . $this->getDono() . " fechada com sucesso </p> ";
        }
    }

    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$ $v na conta de " . $this->getDono() . "</p>";
        } else {
            echo "Impossivel depositar";
        }   
    }

    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Saque de $v autorizado na conta de " . $this->getDono() . "</p>";
            } else {
                echo "Saldo Insuficiente";
            } 
        } else {
            echo "Impossivel Sacar";
        }
    }

    public function pagarMensal() {
        $v = 0;
        if ($this->getTipo() =="CC") {
            $v = 12; 
        } else if ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setsaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada na conta de " . $this->getDono() . "</p>"; 
            } else {
                echo "Problemas com a conta";
            }
    }
}
