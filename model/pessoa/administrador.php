<?php
    require("pessoa.php");

    class Administrador extends Pessoa{
        
        private $tipo;

        // getters and setters
        public function getTipo(){
            return $this->tipo;
        }
    }
    
?>