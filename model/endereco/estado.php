<?php 

    namespace compra_certa\model\endereco;

    class Estado{

        private $nome;
        private $sigla;

    //getters and setters
    
        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getSigla()
        {
            return $this->sigla;
        }

        public function setSigla($sigla)
        {
            $this->sigla = $sigla;
        }
        
    }




?>