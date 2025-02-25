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


    








    }

        /*public function apresentar() 
        public function status()    
        public function ganharLuta()
        public function perderLuta()
        public function empatarLuta()
*/


