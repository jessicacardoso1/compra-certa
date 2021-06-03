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

        public function editarDados($cliente){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare(
                "UPDATE compra_certa.cliente 
                SET email = :email, senha = :senha 
                WHERE cpf = :cpf;"
                );
                $sql->bindValue(':email',$cliente->getEmail());
                $sql->bindValue(':cpf',$cliente->getCpf());
                $sql->bindValue(':senha',$cliente->getSenha());

                $sql->execute();
                
                $pdo = $conn->close();

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }
        public function getDadosUser($cliente){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select email, senha 
                    from compra_certa.cliente
                    where cpf = :cpf;
                ");
                $sql->bindValue(":cpf",$cliente->getCpf());
                $sql->execute();
                
                $pdo = $conn->close();

                $linha = $sql->fetch(PDO::FETCH_ASSOC);

                return $linha;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }

    }

?>
