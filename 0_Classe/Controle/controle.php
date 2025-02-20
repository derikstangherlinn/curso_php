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


}

public function abrirMenu() {


}

public function fecharMenu() {


}

public function desligarMudo() { 


}

public function ligarMudo() {


}

public function maisVolume() {


}

public function menosVolume() {


}

public function pause() {


}

public function play() {


}
 
}