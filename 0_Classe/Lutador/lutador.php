<?php

    Class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function apresentar() {

        }

        public function status() {

        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

        public function __construct($no, $na, $id, $al, $pe, $ca, $vi, $de, $em) {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->peso = $pe;
            $this->categoria = $ca;
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empate = $em;

        }

        public function getNome() {
            return $this->nome;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }

        public function getIdade() {
            return $this->idade;
        }
        
        public function getAltura() {
            return $this->altura;
        }

        public function getPeso() {
            return $this->peso;
        }
        
        public function getCategoria() {
            return $this->categoria;
        }

        public function getVitorias() {
            return $this->vitorias;
        }

        public function getDerrotas() {
            return $this->derrotas;
        }

        public function getEmpates() {
            return $this->empates;
        }

        public function setNome($no) {
            $this->nome = $no;
        }

        public function setNacionalidade($na) {
            $this->nacionalidade = $na;
        }

        public function setIdade($i) {
            $this->idade = $i;
        }

        public function setAltura($a) {
            $this->altura = $a;
        }

        public function setPeso($p) {
            $this->peso = $p;
            $this->setCategoria();
        }

        public function setCategoria() {
            if ($this->peso < 52.2) {
                $this->categoria = "Inválido";
            } elseif ($this->peso <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9) {
                $this->categoria = "Médio";
            } elseif ($this->peso <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            } 
        }

        public function setVitorias($v) {
            $this->vitorias = $v;
        }

        public function setDerrotas($d) {
            $this->derrotas = $d;
        }

        public function setEmpates($e) {
            $this-> empates = $e;
        }
    }