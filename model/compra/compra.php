<?php 


class Compra{

    private $itens;
    private $cliente;
    private $numero;
    private $val_total;
    private $setor;
    private $data;
    private $endereco;
    private $data_setores;

    public function Compra(){
        
    }

    public function gerar_num_compra(){
        
    }

    public function listarCompra(){
        
    }

    public function editarEndereco(){
        
    }

    public function concluirCompra(){
        
    }



    //getters and setters

    
    public function getItens()
    {
        return $this->itens;
    }

   
    public function setItens($itens)
    {
        $this->itens = $itens;
    }

  
    public function getCliente()
    {
        return $this->cliente;
    }


    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    
    public function getNumero()
    {
        return $this->numero;
    }

   
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    
    public function getVal_total()
    {
        return $this->val_total;
    }

     
    public function setVal_total($val_total)
    {
        $this->val_total = $val_total;
    }

    
    public function getSetor()
    {
        return $this->setor;
    }

    
    public function setSetor($setor)
    {
        $this->setor = $setor;
    }

     
    public function getData()
    {
        return $this->data;
    }

    
    public function setData($data)
    {
        $this->data = $data;
    }

   
    public function getEndereco()
    {
        return $this->endereco;
    }

    
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
}
?>