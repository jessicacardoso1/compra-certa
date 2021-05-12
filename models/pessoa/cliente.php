<?php
    require("compra.php");

    class Cliente extends Pessoa{

        protected $email;
        protected $ativo;
        protected $compras;
        protected $enderecos;

        // getters and setters
        public function getEmail(){
            return $this->email;
        }

        public function setEmail($_email){
            $this->email = $_email;
        }

        public function getAtivo(){
            return $this->email;
        }

        public function setAtivo($_ativo){
            $this->ativo = $_ativo;
        }

        public function getCompras(){
            return $this->compras;
        }

        public function setCompras($_compras){
            $this->compras = $_compras;
        }

        public function getEnderecos(){
            return $this->enderecos;
        }

        public function setEnderecos($_enderecos){
            $this->enderecos = $_enderecos;
        }

    }
    
?>