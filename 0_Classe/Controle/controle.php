<?php

class Controle {
    private $volume;
    private $ligado;
    private $tocando;


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

}