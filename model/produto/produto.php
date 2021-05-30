<?php

	namespace compra_certa\model\produto;
	use compra_certa\database\produto\ProdutoDAO;

    class Produto{
        
        private $nome;
        private $descricao;
        private $categoria;
        private $preco;
        private $disponivel;

        public function consultarProdutos(){
                $dao = new ProdutoDAO();

                return $dao->consultarProdutos($this);
        }


        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;
        }

        /**
         * Get the value of descricao
         */ 
        public function getDescricao()
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         *
         * @return  self
         */ 
        public function setDescricao($descricao)
        {
                $this->descricao = $descricao;
        }

        /**
         * Get the value of categoria
         */ 
        public function getCategoria()
        {
                return $this->categoria;
        }

        /**
         * Set the value of categoria
         *
         * @return  self
         */ 
        public function setCategoria($categoria)
        {
                $this->categoria = $categoria;
        }

        /**
         * Get the value of preco
         */ 
        public function getPreco()
        {
                return $this->preco;
        }

        /**
         * Set the value of preco
         *
         * @return  self
         */ 
        public function setPreco($preco)
        {
                $this->preco = $preco;
        }

        /**
         * Get the value of disponivel
         */ 
        public function getDisponivel()
        {
                return $this->disponivel;
        }

        /**
         * Set the value of disponivel
         *
         * @return  self
         */ 
        public function setDisponivel($disponivel)
        {
                $this->disponivel = $disponivel;
        }

    }
?>