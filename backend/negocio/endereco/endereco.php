<?php

class Endereco{

    protected $pais;
    protected $nome;
    protected $telefone;
    protected $cep;
    protected $bairro;
    protected $endereco;
    protected $complemento;
    protected $cidade;
    protected $numero;
    

    
    //getters and setters

    public function getTelefone()
    {
        return $this->telefone;
    }


    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

   
    public function getNome()
    {
        return $this->nome;
    }
     
      
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

   
    public function getTelefone()
    {
        return $this->telefone;
    }

 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    
    public function getCep()
    {
        return $this->cep;
    }

    
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    
    public function getBairro()
    {
        return $this->bairro;
    }

    
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    
    public function getEndereco()
    {
        return $this->endereco;
    }

      
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

   
    public function getComplemento()
    {
        return $this->complemento;
    }

     
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    
    public function getCidade()
    {
        return $this->cidade;
    }

    
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    
    public function getNumero()
    {
        return $this->numero;
    }

    
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}


?>