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
    }

   public function getEstado()
    {
        return $this->estado;
    }
 
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
}

?>