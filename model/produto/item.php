<?php

    namespace compra_certa\model\produto;

    class Item{
        
        private $produto;
        private $quantidade;
        
        public function subTotal(){
            return $this->produto->getPreco() * $this->quantidade;
        }

        public function getProduto()
        {
            return $this->produto;
        }

        public function setProduto($produto)
        {
            $this->produto = $produto;
        }

        public function getQuantidade()
        {
            return $this->quantidade;
        }

        public function setQuantidade($quantidade)
        {
            $this->quantidade = $quantidade;
        }

    }
?>