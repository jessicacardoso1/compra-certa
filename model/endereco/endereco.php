<?php

class Endereco{

    private $pais;
    private $nome;
    private $telefone;
    private $cep;
    private $bairro;
    private $endereco;
    private $complemento;
    private $cidade;
    private $numero;
    

    
    //getters and setters
    public function getNome()
    {
        return $this->nome;
    }
     
      
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

   
    public function getTelefone()
    {
        return $this->telefone;
    }

 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    
    public function getCep()
    {
        return $this->cep;
    }

    
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    
    public function getBairro()
    {
        return $this->bairro;
    }

    
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    
    public function getEndereco()
    {
        return $this->endereco;
    }

      
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

   
    public function getComplemento()
    {
        return $this->complemento;
    }

     
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    
    public function getCidade()
    {
        return $this->cidade;
    }

    
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    
    public function getNumero()
    {
        return $this->numero;
    }

    
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}


?>