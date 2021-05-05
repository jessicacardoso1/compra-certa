<?php

    class cadastroClienteDAO{

        public function efetuarCadastro($_cpf, $_email, $_senha){
            $conn = new Conn();
            $pdo = $conn->connect();

            $sql = "SELECT cpf, senha FROM cliente";
            // implementar

            $pdo = $conn->close();

            return true;
            
        }

    }

    $test = new LoginCliente();
    $test->efetuarLogin();

?>
