<?php
    
    require "../../database/pessoa/loginDAO.php";

    class Login{

        private $cpf;
        private $senha;
        private $usr_tp;

        public function efetuarLogin(){
            $dao = new LoginDAO();
            
            return $dao->efetuarLogin($this);
        }

        // getters and setters...
        public function getCpf(){
            return $this->cpf;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function getUsrTp(){
            return $this->usr_tp;
        }

        public function setCpf($_cpf){
            $this->cpf = $_cpf;
        }

        public function setSenha($_senha){
            $this->senha = $_senha;
        }

        public function setUsrTp($_usr_tp){
            $this->usr_tp = $_usr_tp;
        }

    }

?>
