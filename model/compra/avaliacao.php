<?php

    namespace compra_certa\model\compra;

    class Avaliacao{

        private $estrelas;
        private $titulo;
        private $comentario;

        // getters and setters
    
        public function getCompra()
        {
            return $this->compra;
        }

        public function setCompra($compra)
        {
            $this->compra = $compra;
        }

        public function getEstrelas()
        {
            return $this->estrelas;
        }

        public function setEstrelas($estrelas)
        {
            $this->estrelas = $estrelas;
        }

        public function getTitulo()
        {
            return $this->titulo;
        }

        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }
        
        public function getComentario()
        {
            return $this->comentario;
        }

        public function setComentario($comentario)
        {
            $this->comentario = $comentario;
        }

    }

?>