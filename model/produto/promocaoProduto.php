<?php

    class PromocaoProduto{
        
        private $produto;
        private $novoValor;

         //getters and setters
        public function getProduto()
        {
            return $this->produto;
        }

        public function setProduto($produto)
        {
            $this->produto = $produto;
        }

        public function getNovoValor()
        {
            return $this->novoValor;
        }

        public function setNovoValor($novoValor)
        {
            $this->novoValor = $novoValor;
        }

    }
?>
