<?php

    namespace compra_certa\model\pessoa;

    class Pessoa{

        private $cpf;
        private $senha;

        // getters and setters
        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($_cpf){
            $this->cpf = $_cpf;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($_senha){
            $this->senha = $_senha;
        }
    }
    
?>