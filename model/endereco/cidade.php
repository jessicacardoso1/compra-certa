<?php 

class Cidade{

    private $nome;
    private $estado;
    
    //getters and setters
   
    public function getNome()
    {
        return $this->nome;
    }

     public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

   public function getEstado()
    {
        return $this->estado;
    }
 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }
}

?>