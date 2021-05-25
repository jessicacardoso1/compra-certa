<?php

    class Promocao{

        private $produtos;
        private $nome;
        
        public function getProdutos()
        {
            return $this->produtos;
        }
        
        public function setProdutos($produtos)
        {
            $this->produtos = $produtos;
        }
        
        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

    }

?>