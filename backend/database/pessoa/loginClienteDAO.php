<?php

    class LoginClienteDAO{

        public function efetuarLogin($_cpf, $_senha){
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
