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

                $this->vincularClienteEndereco($last_id);
                
                return $last_id;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }// FIM método

        public function vincularClienteEndereco($id_endereco){

            try{
                $conn = new Conn();
                $pdo = $conn->connect();

                $sql = $pdo->prepare("
                    INSERT INTO compra_certa.cliente_has_endereco
                    (cpf, id_endereco)
                    VALUES
                    (:cpf, :id_endereco);
                ");
                
                $sql->bindValue("cpf", $_SESSION['usuario_logado']);
                $sql->bindParam("id_endereco", $id_endereco);
               
                $sql->execute();
                
                $last_id = $pdo->lastInsertID();

                $pdo = $conn->close();
                
                return $last_id;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
     } // 

        public function inserirCidade($_cidade){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                # verifica se já existe cidade, se sim, retorna o id dela.. se não, deixa inserir.
                $check_cidade = $this->getIdCidadeViaNome($_cidade->getNome());
                if($check_cidade)
                    return $check_cidade;

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
                echo $e;
                return false;
            }

        }// FIM método

        public function getIdCidadeViaNome($_nome_cidade){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select id_cidade
                    from compra_certa.cidade
                    where nome = :nome;
                ");
                
                $sql->bindParam("nome", $_nome_cidade);

                $sql->execute();
                
                $pdo = $conn->close();

                $linha = $sql->fetch(PDO::FETCH_ASSOC);

                return $linha['id_cidade'];

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }

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
        }// FIM método

        public function getEnderecosViaCpf($_cpf){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select endereco.id_endereco as id, endereco.pais as pais, endereco.nome as nome, endereco.cep as cep, endereco.bairro as bairro, endereco.endereco as endereco, endereco.complemento as complemento, endereco.numero as numero, endereco.telefone as telefone, cidade.nome as cidade_nome, estado.nome as estado_nome, estado.sigla as estado_sigla
                    from compra_certa.endereco join compra_certa.cliente_has_endereco on cliente_has_endereco.id_endereco = endereco.id_endereco
                    join compra_certa.cidade on endereco.id_cidade = cidade.id_cidade
                    join compra_certa.estado on cidade.id_estado = estado.id_estado
                    where cliente_has_endereco.cpf = :cpf;
                ");
                
                $sql->bindParam("cpf", $_cpf);

                $sql->execute();

                $enderecos = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "ID_ENDERECO"  => $linha['id'],
                        "PAIS"         => $linha['pais'],
                        "NOME"         => $linha['nome'],
                        "CEP"          => $linha['cep'],
                        "BAIRRO"       => $linha['bairro'],
                        "ENDERECO"     => $linha['endereco'],
                        "COMPLEMENTO"  => $linha['complemento'],
                        "NUMERO"       => $linha['numero'],
                        "TELEFONE"     => $linha['telefone'],
                        "CIDADE_NOME"  => $linha['cidade_nome'],
                        "ESTADO_NOME"  => $linha['estado_nome'],
                        "ESTADO_SIGLA" => $linha['estado_sigla']
                    );

                    array_push($enderecos, $arr);
                }
                
                $pdo = $conn->close();

                return $enderecos;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }

        public function removerEndereco($_id_endereco){
            try{
                $conn = new Conn();
                #$pdo = $conn->connect();
                
                /* 
                    método um tanto complicado de desenvolve por envolver 
                    uma cascata de chaves. endereco está em várias tabelas...
                    vale a pena remover o endereco?
                */

                #$sql = $pdo->prepare("
                #    delete from endereco;
                #");
                
                #$sql->bindParam("cpf", $_cpf);

                #$sql->execute();

                #$pdo = $conn->close();

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }

    }    

?>
