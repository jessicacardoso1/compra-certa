<?php

    namespace compra_certa\database\pessoa;
    use compra_certa\database\conn\Conn;
    use PDOException;

    class ClienteDAO{
        
        public function efetuarCadastro($_cliente){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("insert into compra_certa.cliente (cpf, senha, email, ativo) values (:cpf, :senha, :email, :ativo)");
                
                $sql->bindValue("cpf", $_cliente->getCpf());
                $sql->bindValue("email", $_cliente->getEmail());
                $sql->bindValue("senha", $_cliente->getSenha());
                $sql->bindValue("ativo", $_cliente->getAtivo());
                
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
