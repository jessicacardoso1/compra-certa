<?php

    
    require "../../database/produto/categoriaDAO.php";

    class Categoria{

        private $nome;
        
        public function listarAll(){
            $dao = new CategoriaDAO();

            return $dao->listarAll();
        }


        public function getNome(){
            return $this->nome;
        }

        public function setNome($_nome){
            $this->nome = $_nome;
        }
        
    }

?>