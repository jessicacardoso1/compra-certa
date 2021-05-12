<?php
    class Pessoa{

        protected $cpf;
        protected $senha;

        // getters and setters
        public function getCpf(){
            return $this->cpf;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($_senha){
            $this->senha = $_senha;
        }
    }
    
?>