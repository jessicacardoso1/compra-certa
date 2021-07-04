<?php

    namespace compra_certa\model\endereco;
    use compra_certa\database\endereco\EnderecoDAO;

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
        private $codigo;
        
        public function efetuarCadastro(){
            $dao = new EnderecoDAO();

            return $dao->efetuarCadastro($this);
        }

        public function getEnderecosViaCpf($_cpf){
            $dao = new EnderecoDAO();

            return $dao->getEnderecosViaCpf($_cpf);
        }

        public function removerEndereco($id_endereco){
            $dao = new EnderecoDAO();

            return $dao->removerEndereco($id_endereco);
        }
         
        public function getDadosEndereco(){

            $dao = new EnderecoDAO();

            return $dao->getDadosEndereco($this);
        }

        public function editarEndereco(){
            $dao = new EnderecoDAO();
            
            $dao->editarEndereco($this);
        }

        public function getBairrosMaisAtendidos(){
            $dao = new EnderecoDAO;

            return $dao->getBairrosMaisAtendidos();
        }
        
        //getters and setters
        public function getPais()
        {
            return $this->pais;
        }
        
        public function setPais($pais)
        {
            $this->pais = $pais;
        }

         
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
        
        public function getCodigo()
        {
                return $this->codigo;
        }

        public function setCodigo($codigo)
        {
                $this->codigo = $codigo;

        }

    }

?>