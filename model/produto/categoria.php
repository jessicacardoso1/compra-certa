<?php

    namespace compra_certa\model\produto;
    use compra_certa\database\produto\CategoriaDAO;

    class Categoria{

        private $nome;
        
        public function listarTodas(){
            $dao = new CategoriaDAO();

            return $dao->listarTodas();
        }

        public function getQntProdutosPorCategoria(){
            $dao = new CategoriaDAO();

            return $dao->getQntProdutosPorCategoria();
        }


        public function getNome(){
            return $this->nome;
        }

        public function setNome($_nome){
            $this->nome = $_nome;
        }
        
    }

?>