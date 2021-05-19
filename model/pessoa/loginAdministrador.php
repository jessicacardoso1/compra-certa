<?php
    
    require("../../database/pessoa/loginAdministradorDAO.php");

    class LoginAdministrador{

        private $cpf;
        private $senha;

        public function efetuarLogin(){
            $dao = new LoginAdministradorDAO();
            
            return $dao->efetuarLogin($this->cpf, $this->senha);
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($_cpf){
            $this->cpf = $_cpf;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($_senha){
            $this->senha = $_senha;
        }

    }

?>
