<?php

require("../../database/pessoa/cadastroClienteDAO.php");

    class CadastroCliente{

        private $cpf;
        private $email;
        private $senha;

        public function efetuarCadastro(){
            $dao = new cadastroClienteDAO();
            
            $this->carregaDados();
            
            if(!($dao->efetuarCadastro($this->cpf, $this->email, $this->senha))) {
                echo '<script>';
                echo 'alert("Houve um erro no cadastramento, por favor contate a administração.")';
                echo '</script>';

                return false;
            }
            

            header("location:../../../frontend/index.html");

            return true;

        }

        public function carregaDados(){
            $this->cpf   = $_POST["cpfCadastro"];
            $this->email = $_POST["emailCadastro"];
            $this->senha = $_POST["senhaCadastro"];

        }

    }

?>
