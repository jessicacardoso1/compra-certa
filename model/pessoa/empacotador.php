<?php
    require("administrador.php");

    class Empacotador extends Funcionario{
        private $compra;

        public function getCompra()
        {
            return $this->compra;
        }

        public function setCompra($compra)
        {
            $this->compra = $compra;
        }
    }
    
?>