<?php

    namespace compra_certa\model\produto;
    use compra_certa\database\produto\ProdutoDAO;

    class Promocao{

        private $_codigo;
        private $produtos = array();
        private $nome;

        public function __construct($codigo){
            $this->_codigo = $codigo;

            $this->produtos = $this->getPromocao($this);
        }

        public function getPromocao($promocao){
            $dao = new ProdutoDAO();

			return $dao->getPromocao($promocao->getCodigo());
        }

        public function getProdutoPromocao($produto){
            if(!$this->produtoEmPromocao($produto))
                return array();

            $indice_produto = $this->getIndiceProduto($produto);
            return $this->produtos[$indice_produto];
        }

        public function produtoEmPromocao($produto){
            $check = false;
            for($i = 0; $i < count($this->produtos) && $check == false; $i++)
                if($this->produtos[$i]['ID_PRODUTO'] == $produto->getCodigo())
                    $check = true;

            return $check;
        }

        public function getIndiceProduto($produto){
            $i = 0;
            
            for(; $this->produtos[$i]['ID_PRODUTO'] != $produto->getCodigo(); $i++);

            return $i;
        }
        
        public function getCodigo()
        {
            return $this->_codigo;
        }
        
        public function setCodigo($codigo)
        {
            $this->_codigo = $codigo;
        }

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