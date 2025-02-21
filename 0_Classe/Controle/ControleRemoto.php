<?php

class ControleRemoto {
    private $volume;
    private $ligado;
    private $tocando;


public function __construct() {
    $this->volume = 50;
    $this->ligado = false;
    $this->tocando = false;
}

private function setVolume($v) {
    $this->volume = $v;
} 

private function getVolume() {
    return $this->volume;
}

private function setLigado($l) {
    $this->ligado = $l;
}

private function getLigado() {
    return $this->ligado;
}

private function setTocando($t) {
    $this->tocando = $t;
}

private function getTocando() {
    return $this->tocando;
}

 public function ligar() {
    $this->setLigado(true);

}

public function desligar() {
    $this->setLigado(false);

}

public function abrirMenu() {
    echo "<p>----- MENU -----</p>";
    echo "<br> Está ligado?: " . ($this->getLigado() ? "SIM":"NAO"); 
    echo "<br> Está tocando?: " . ($this->getTocando()? "SIM":"NAO");
    echo "<br> Volume: " . $this->getVolume();
    for ($i=0; $i <= $this->getVolume(); $i += 10 ) {
        echo " | "; 
    }
    echo "<br>";
}

public function fecharMenu() {
    echo "<br>Fechando Menu...";

}

public function desligarMudo() { 
    if ($this->getLigado() && $this->getVolume() == 0) {
        $this->setVolume(50);
    }

}

public function ligarMudo() {
    if ($this->getLigado() && $this->getVolume()> 0) {
        $this->setVolume(0);
    }

}

public function maisVolume() {
    if ($this->getLigado()) {
        $this->setVolume($this->getVolume() + 10);
    } else {
        echo "<p>ERRO! Não posso aumentar o volume";
    }   

}

public function menosVolume() {
    if ($this->getLigado()) {
        $this->setLigado($this->getVolume() - 10);
    } else { 
        echo "<p> ERRO! Não posso diminuir o volume </p>";
    }

}

public function pause() {
    if ($this->getLigado() && $this->getTocando()) {
        $this->setTocando(false);
    }

}

public function play() {
    if ($this->getLigado() && !($this->getTocando())) {
        $this-> setTocando(true);
    }

}
 
}