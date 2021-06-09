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

        public function getPromocao($_id_promocao){
            $dao = new ProdutoDAO();
			
			return $dao->getPromocao($_id_promocao);
        }

        public function consultarProdutoViaID($id_produto){
            $dao = new ProdutoDAO();
			
			return $dao->consultarProdutoViaID($id_produto);
        }


        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getDescricao()
        {
            return $this->descricao;
        }

        public function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }

        public function getCategoria()
        {
            return $this->categoria;
        }

        public function setCategoria($categoria)
        {
            $this->categoria = $categoria;
        }

        public function getPreco()
        {
            return $this->preco;
        }

        public function setPreco($preco)
        {
            $this->preco = $preco;
        }

        public function getDisponivel()
        {
            return $this->disponivel;
        }

        public function setDisponivel($disponivel)
        {
            $this->disponivel = $disponivel;
        }


    }
?>