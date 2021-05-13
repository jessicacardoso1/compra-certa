<?php

class Avaliacao{

    private $compra;
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

        return $this;
    }

    
    public function getEstrelas()
    {
        return $this->estrelas;
    }

     
    public function setEstrelas($estrelas)
    {
        $this->estrelas = $estrelas;

        return $this;
    }

     
    public function getTitulo()
    {
        return $this->titulo;
    }

    
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    
    public function getComentario()
    {
        return $this->comentario;
    }

     
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }
}

?>