<?php

    namespace compra_certa\database\pessoa;
    use compra_certa\database\conn\Conn;
    use PDO, PDOException;

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
                echo $e;
                return false;
            }
            
        }// FIM método


        /** Métodos úteis **/
        public function getNumTotalClientes(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();

                $sql = $pdo->prepare("
                    select COUNT(cpf) 
                    from compra_certa.cliente;
                ");

                $sql->execute();
                
                $pdo = $conn->close();

                $linha = $sql->fetch(PDO::FETCH_ASSOC);

                return $linha['COUNT(cpf)'];

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }// FIM método

        public function getNumTotalClientesAtivos(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select COUNT(cpf) 
                    from compra_certa.cliente
                    where ativo = 1;
                ");

                $sql->execute();
                
                $pdo = $conn->close();

                $linha = $sql->fetch(PDO::FETCH_ASSOC);

                return $linha['COUNT(cpf)'];

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }// FIM método

    }

?>
