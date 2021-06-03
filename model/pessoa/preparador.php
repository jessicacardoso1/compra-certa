<?php
    require("pessoa.php");

    class Preparador extends Pessoa{
        
        private $compras;

        public function getCompras()
        {
            return $this->compras;
        }

        public function setCompras($compras)
        {
            $this->compras = $compras;
        }
    }
    
?>