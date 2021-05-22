<?php

    $DAO_dir = dirname(__DIR__);
    require $DAO_dir."/conn/conn.php";

    class ClienteDAO{
        
        public function efetuarCadastro($_cliente){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("insert into compra_certa.cliente (cpf, senha, email, ativo) values (:cpf, :senha, :email, :ativo)");
                
                $sql->bindParam("cpf", $_cliente->getCpf());
                $sql->bindParam("email", $_cliente->getEmail());
                $sql->bindParam("senha", $_cliente->getSenha());
                $sql->bindParam("ativo", $_cliente->getAtivo());
                
                $sql->execute();

                $pdo = $conn->close();
                
                return true;

            }
            catch(PDOException $e){
                return false;
            }
            
        }// FIM método

    }

?>
