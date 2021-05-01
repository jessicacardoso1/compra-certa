<?php
    class Item{
        
        protected $produto;
        protected $quantidade;
        

        /**
         * Get the value of produto
         */ 
        public function getProduto()
        {
                return $this->produto;
        }

        /**
         * Set the value of produto
         *
         * @return  self
         */ 
        public function setProduto($produto)
        {
                $this->produto = $produto;

                return $this;
        }

        /**
         * Get the value of quantidade
         */ 
        public function getQuantidade()
        {
                return $this->quantidade;
        }

        /**
         * Set the value of quantidade
         *
         * @return  self
         */ 
        public function setQuantidade($quantidade)
        {
                $this->quantidade = $quantidade;

                return $this;
        }
    }
?>