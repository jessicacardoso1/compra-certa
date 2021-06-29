<?php

	namespace compra_certa\model\produto;
	use compra_certa\database\produto\ProdutoDAO;

    class Produto{
        
        private $codigo;
        private $nome;
        private $descricao;
        private $categoria;  
        private $preco;
        private $disponivel;
        private $img;

        public function consultarProdutos(){
			$promocao = new \compra_certa\model\produto\Promocao(1);
            $dao = new ProdutoDAO();
            
            // ajuste no valor dos produtos que estão em promoção...
			$produtos = $dao->consultarProdutos($this);
            
            // sessão com os produtos para realizar o filtro da consulta...
            $_SESSION['consulta_produtos'] = $produtos;

            for($i = 0; $i < count($produtos); $i++){
                $produto = new Produto();
                $produto->setCodigo($produtos[$i]['ID']);

                if($promocao->produtoEmPromocao($produto))
                    $produtos[$i]['PRECO_NOVO_PRODUTO'] = $promocao->getProdutoPromocao($produto)['PRECO_NOVO_PRODUTO'];
                
            }

            return $produtos;
        }

        public function consultarProdutoViaID($id_produto){
            $promocao = new \compra_certa\model\produto\Promocao(1);
            $dao = new ProdutoDAO();

            $produto = new Produto;
            $produto->setCodigo($id_produto);

            $dados_produto = $dao->consultarProdutoViaID($produto->getCodigo());
            
            if($promocao->produtoEmPromocao($produto)){
                $dados_produto[0]['PRECO'] = $promocao->getProdutoPromocao($produto)['PRECO_NOVO_PRODUTO'];
            }

			return $dados_produto;
        }

        public function getCodigo()
        {
            return $this->codigo;
        }

        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;
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

        public function getImg()
        {
            return $this->img;
        }

        public function setImg($img)
        {
            $this->img = $img;
        }

    }
?>