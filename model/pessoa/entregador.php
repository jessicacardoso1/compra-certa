<?php
    require("administrador.php");
    //require("compras.php")

    class Entregador extends Funcionario{
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