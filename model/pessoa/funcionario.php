<?php
    require("pessoa.php");

    class Funcionario extends Pessoa{
        
        private $tipo;

        // getters and setters
        public function getTipo(){
            return $this->tipo;
        }
    }
    
?>