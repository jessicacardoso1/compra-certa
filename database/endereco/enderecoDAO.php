<?php

    namespace compra_certa\database\endereco;
    use compra_certa\database\conn\Conn;
    use PDO, PDOException;

    class EnderecoDAO{
        
        public function efetuarCadastro($_endereco){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();

                $id_cidade = $this->inserirCidade($_endereco->getCidade());

                $sql = $pdo->prepare("
                    insert into compra_certa.endereco 
                    (pais, nome, cep, bairro, endereco, complemento, id_cidade, numero, telefone)
                    values (:pais, :nome, :cep, :bairro, :endereco, :complemento, :id_cidade, :numero, :telefone);
                ");
                
                $sql->bindValue("pais", $_endereco->getPais());
                $sql->bindValue("nome", $_endereco->getNome());
                $sql->bindValue("cep", $_endereco->getCep());
                $sql->bindValue("bairro", $_endereco->getBairro());
                $sql->bindValue("endereco", $_endereco->getEndereco());
                $sql->bindValue("complemento", $_endereco->getComplemento());
                $sql->bindValue("id_cidade", $id_cidade);
                $sql->bindValue("numero", $_endereco->getNumero());
                $sql->bindValue("telefone", $_endereco->getTelefone());
                
                $sql->execute();
                
                $last_id = $pdo->lastInsertID();

                $pdo = $conn->close();
                
                return $last_id;

            }
            catch(PDOException $e){
                return false;
            }
        }// FIM método

        public function inserirCidade($_cidade){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $id_estado = $this->getIdEstadoViaNome($_cidade->getEstado()->getNome());
                $sql = $pdo->prepare("
                    insert into compra_certa.cidade 
                    (nome, id_estado)
                    values (:nome, :id_estado);
                ");
                
                $sql->bindValue("nome", $_cidade->getNome());
                $sql->bindValue("id_estado", $id_estado);
                
                $sql->execute();

                $last_id = $pdo->lastInsertID();
                $pdo = $conn->close();
                
                return $last_id;
            }
            catch(PDOException $e){
                return false;
            }

        }// FIM método

        public function getIdEstadoViaNome($_nome_estado){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select id_estado
                    from compra_certa.estado
                    where nome = :nome;
                ");
                
                $sql->bindParam("nome", $_nome_estado);

                $sql->execute();
                
                $pdo = $conn->close();

                $linha = $sql->fetch(PDO::FETCH_ASSOC);

                return $linha['id_estado'];

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }

    }    

?>
