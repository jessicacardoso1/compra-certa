<?php
    require("pessoa.php");

    class Administrador extends Pessoa{
        
        protected $tipo;

        // getters and setters
        public function getTipo(){
            return $this->tipo;
        }
    }
    
?>