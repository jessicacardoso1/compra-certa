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

        
        // métodos utilizados no dashboard...
        public function getCategoriasMaisVendidas(){
            $dao = new CategoriaDAO;

            $categorias = $dao->getCategoriasMaisVendidas();

            $contador = 0;
            for($i = 0; $i < count($categorias); $i++)
                $contador += $categorias[$i]['QUANTIDADE'];
                
            for($i = 0; $i < count($categorias); $i++)
                $categorias[$i]['QUANTIDADE'] /= $contador;

            return $categorias;
        }


        public function getNome(){
            return $this->nome;
        }

        public function setNome($_nome){
            $this->nome = $_nome;
        }
        
    }

?>