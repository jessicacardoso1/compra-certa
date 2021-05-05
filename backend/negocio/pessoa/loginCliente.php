<?php
    
    require("../../database/pessoa/loginClienteDAO.php");

    class LoginCliente{

        private $cpf;
        private $senha;

        public function efetuarLogin(){
            $dao = new LoginClienteDAO();
            
            $this->carregaDados();
            
            if(!($dao->efetuarLogin($this->cpf, $this->senha))) {
                echo '<script>';
                echo 'alert("CPF ou senha incorreto!")';
                echo '</script>';

                return false;
            }
            
            // redirecionando para a tela inicial...
            header("location:../../../frontend/index.html");

            return true;

        }

        public function carregaDados(){
            $this->cpf   = $_POST["cpfLogin"];
            $this->senha = $_POST["senhaLogin"];

        }

    }

?>
