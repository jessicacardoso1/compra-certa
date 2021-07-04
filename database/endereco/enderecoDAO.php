<?php

    namespace compra_certa\database\endereco;
    use compra_certa\database\conn\Conn;
    use compra_certa\model\endereco\Cidade;
    use compra_certa\model\endereco\Estado;
    use compra_certa\model\endereco\Endereco;
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
                    where cliente_has_endereco.cpf = :cpf and endereco.status = 1;
                ");
                
                $sql->bindParam("cpf", $_cpf);

                $sql->execute();

                $enderecos = array();        
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $estado = new Estado();
                    $estado->setNome($linha['estado_nome']);
                    $estado->setSigla($linha['estado_sigla']);

                    $cidade = new Cidade();
                    $cidade->setNome($linha['cidade_nome']);
                    $cidade->setEstado($estado);
                   

                    $endereco = new Endereco();
                    $endereco->setCodigo($linha['id']);
                    $endereco->setPais($linha['pais']);
                    $endereco->setNome($linha['nome']);
                    $endereco->setEndereco($linha['endereco']);
                    $endereco->setCep($linha['cep']);
                    $endereco->setBairro($linha['bairro']);
                    $endereco->setComplemento($linha['complemento']);
                    $endereco->setNumero($linha['numero']);
                    $endereco->setTelefone($linha['telefone']);
                    $endereco->setCidade($cidade);
                
                  

                    array_push($enderecos, $endereco);
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
                $pdo = $conn->connect();

                $sql = $pdo->prepare("
                    update compra_certa.endereco set status = 0 where (id_endereco = :_id_endereco);
                ");
                
                $sql->bindParam(":_id_endereco", $_id_endereco);

                $sql->execute();

                $pdo = $conn->close();
            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }

        public function getDadosEndereco($endereco){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
              
                $sql = $pdo->prepare("
                    select endereco.id_endereco as id, endereco.pais as pais, endereco.nome as nome, endereco.cep as cep, endereco.bairro as bairro, endereco.endereco as endereco, endereco.complemento as complemento, endereco.numero as numero, endereco.telefone as telefone, cidade.nome as cidade_nome, estado.nome as estado_nome, estado.sigla as estado_sigla
                    from compra_certa.endereco 
                    join compra_certa.cidade on endereco.id_cidade = cidade.id_cidade
                    join compra_certa.estado on cidade.id_estado = estado.id_estado
                    where endereco.id_endereco = :id;
                ");
                
                $sql->bindValue("id", $endereco->getCodigo());

                $sql->execute();

                $enderecov = array();
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

                    array_push($enderecov, $arr);

                }

                $pdo = $conn->close();
                return $enderecov; 
            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
            
        }

        public function editarEndereco($endereco){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();

                $sql = $pdo->prepare("
                    UPDATE compra_certa.endereco
                    SET nome = :nome, cep = :cep, bairro = :bairro, endereco = :endereco, complemento = :complemento, numero = :numero, telefone = :telefone 
                    WHERE (id_endereco = :id_endereco)
                ");

                $sql->bindValue(":id_endereco", $endereco->getCodigo());
                $sql->bindValue(":nome", $endereco->getNome());
                $sql->bindValue(":cep", $endereco->getCep());
                $sql->bindValue(":bairro", $endereco->getBairro());
                $sql->bindValue(":endereco", $endereco->getEndereco());
                $sql->bindValue(":complemento", $endereco->getComplemento());
                #$sql->bindValue(":_id_cidade", $endereco->getCidade()->getCodigo());
                $sql->bindValue(":numero", $endereco->getNumero());
                $sql->bindValue(":telefone", $endereco->getTelefone());

                $sql->execute();

                return True;

            }catch(PDOException $e){
                echo $e;
                return false;
            }
        }

        public function getBairrosMaisAtendidos(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
              
                $sql = $pdo->prepare("
                    SELECT endereco.bairro as nome, cidade.nome as cidade, estado.nome as estado, SUM(compra.valor_total) as total
                    FROM compra_certa.compra
                    INNER JOIN compra_certa.endereco
                    ON compra.id_endereco = endereco.id_endereco
                    INNER JOIN compra_certa.cidade
                    ON cidade.id_cidade = endereco.id_cidade
                    INNER JOIN compra_certa.estado
                    on estado.id_estado = cidade.id_estado
                    group by endereco.bairro 
                    ORDER BY count(endereco.bairro) DESC;
                ");
                
                $sql->execute();

                $bairros = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "NOME_BAIRRO"   => $linha['nome'],
                        "CIDADE"        => $linha['cidade'],
                        "ESTADO"        => $linha['estado'],
                        "TOTAL_COMPRAS" => $linha['total'],
                    );

                    array_push($bairros, $arr);

                }

                $pdo = $conn->close();

                return $bairros;
            }
            catch(PDOException $e){
                echo $e;
                return array();
            }
            
        }

    }    

?>
