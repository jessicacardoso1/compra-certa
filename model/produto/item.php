<?php

    namespace compra_certa\model\produto;
    use compra_certa\database\compra\CompraDAO;

    class Item{
        
        private $codigo;
        private $produto;
        private $quantidade;
        
        public function subTotal(){
            return $this->produto->getPreco() * $this->quantidade;
        }

        public function inserirItem($item){
            $dao = new CompraDAO();
            
            return $dao->inserirItem($item);
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

        public function getCodigo()
        {
                return $this->codigo;
        }

        public function setCodigo($codigo)
        {
                $this->codigo = $codigo;
  
        }
    }
?>