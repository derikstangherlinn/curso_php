<?php
    require_once 'lutador.php';
    Class Luta {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;
    
        
        public function marcarLuta() {
        }

        public function lutar() {
        }

        function getDesafiado() {
            return $this->desafiado;
        }

        function getDesafiante() {
            return $this->desafiante;
        }

        function getRounds() {
            return $this->rounds;
        }

        function getAprovada() {
            return $this->aprovada;
        }

        function setDesafiado($d) {
            $this->desafiado = $d;
        }

        function setDesafiante($de) {
            $this->desafiando = $de;
        }

        function setRounds($r) {
            $this->rounds = $r;
        }

        function setAprovada($a) {
            $this->aprovada = $a;
        }
    }

